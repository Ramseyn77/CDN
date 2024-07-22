<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [ 'contenu', 'article_id', 'status' ] ;

    public function article() {
        return $this->belongsTo(Article::class) ;
    }

    public function reponses(){
        return $this->hasMany(Reponse::class) ;
    }
}
