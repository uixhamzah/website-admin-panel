<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Tujuan;
use App\Models\User;
use Illuminate\Support\Arr;

class HospitalsController extends Controller
{
    public function closest(Request $request)
    {
        $key = 'AIzaSyC6SBYyFZItqh-p0a0695QOqhD_88xe94s';
        $origins = $request->input('location');
        $origin_1 = Str::before($origins, ',');
        $origin_2 = Str::after($origins, ',');
        $radius = $request->input('radius');
        $user = User::find(22);
        $hospitalsInProvinces = Tujuan::all();
        // $hospitalsInProvinces = Tujuan::whereRelation('kabupaten','province_id',$user->details->kabupaten->province_id)->get();

        $hospitals = collect();
        $hospitalCoordinates = [];

        foreach ($hospitalsInProvinces as $hosInProv) {
            $distance = $this->getDistance($origin_1, $origin_2, $hosInProv->lat, $hosInProv->long);
            if ($distance < $radius) {
                $hospitalCoordinates[] = $hosInProv->lat.','.$hosInProv->long;

                $hospitals->push([
                    'id' => $hosInProv->id,
                    'id_kabupaten' => $hosInProv->id_kabupaten,
                    'nama_rs' => $hosInProv->nama_rs,
                    'geopoint' => [
                        '_latitude' => (float)$hosInProv->lat,
                        '_longitude' => (float)$hosInProv->long,
                    ],
                    'distance' => $distance
                ]);
            }
        }
        if (!$hospitalCoordinates) {
            return response()->json([
                'found' => $hospitals->count(),
                'message' => 'no hospital found in this area'
            ]);
        }

        $hoCoorJoin = (Arr::join($hospitalCoordinates, '%7C'));
        $result = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$origins.'&destinations='.$hoCoorJoin.'&key='.$key));

        if ($result->status != 'OK') {
            return $result;
        }

        $newHospitals = collect();
        $loopIndex = 0;

        foreach ($hospitals as $hospital) {
            $newHospitals->push([
                'id' => $hospital['id'],
                'id_kabupaten' => $hospital['id_kabupaten'],
                'nama_rs' => $hospital['nama_rs'],
                'geopoint' => [
                    '_latitude' => $hospital['geopoint']['_latitude'],
                    '_longitude' => $hospital['geopoint']['_longitude'],
                ],
                'distance' => $hospital['distance'],
                'distanceOnTheRoad' => [
                    'text' => $result->rows[0]->elements[$loopIndex]->distance->text,
                    'value' => $result->rows[0]->elements[$loopIndex]->distance->value,
                ],
                'duration' => [
                    'text' => $result->rows[0]->elements[$loopIndex]->duration->text,
                    'value' => $result->rows[0]->elements[$loopIndex]->duration->value,
                ],
            ]);
            $loopIndex++;
        }
        
        $data = [
            'origin_addresses' => $result->origin_addresses,
            'found' => $hospitals->count(),
            'ambulances' => $newHospitals
        ];
        return response()->json($data);
    }
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
