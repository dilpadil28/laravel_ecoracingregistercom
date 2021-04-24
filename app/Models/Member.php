<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'gender', 'birth', 'address','phone', 'link_whatsapp', 'status', 'id_member','type_paket', 'user_id', 'photo', 'facebook', 'instagram', 'youtube'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
