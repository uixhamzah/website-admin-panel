<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetails extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'user_details';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function user()
    {
        return $this->belongsTo(Kabupaten::class, 'id_user', 'id');
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'id_kabupaten', 'id');
    }
}
