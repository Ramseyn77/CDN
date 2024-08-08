<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutoriel extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'contenu', 'deleted_at', 'created_at', 'updated_at'] ;

}
