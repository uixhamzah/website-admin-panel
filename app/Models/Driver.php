<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'driver';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function penyedia()
    {
        return $this->belongsTo(Penyedia::class, 'id_penyedia', 'id');
    }
}
