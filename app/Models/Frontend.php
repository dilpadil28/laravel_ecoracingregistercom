<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frontend extends Model
{
    use HasFactory;
    protected $fillable = ['hero_title', 'hero_description', 'hero_images','reward_motcash', 'reward_mobcash', 'reward_bigmocash', 'reward_rumahcash', 'peluang_title', 'peluang_description', 'peluang_image','penghasilan_title', 'penghasilan_image'];

}
