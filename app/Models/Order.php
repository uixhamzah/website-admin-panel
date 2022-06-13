<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'order';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function pengguna()
    {
        return $this->belongsTo(User::class, 'id_pengguna', 'id');
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'id_driver', 'id')->withTrashed();
    }

    public function tujuan()
    {
        return $this->belongsTo(Tujuan::class, 'id_tujuan', 'id')->withTrashed();
    }
}
