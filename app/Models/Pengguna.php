<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengguna extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pengguna';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'id_kabupaten', 'id');
    }
}
