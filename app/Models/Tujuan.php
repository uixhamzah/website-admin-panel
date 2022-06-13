<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tujuan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tujuan';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'id_kabupaten', 'id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'id_tujuan', 'id');
    }
}
