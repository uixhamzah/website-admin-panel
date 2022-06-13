<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DriverDetails extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'driver_details';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id')->withTrashed();
    }
    
    public function penyedia()
    {
        return $this->belongsTo(Penyedia::class, 'id_penyedia', 'id');
    }
}
