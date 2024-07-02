<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'contenu', 'article_id', 'user_id'
    ] ;

    public function user(){
        return $this->belongsTo(User::class) ;
    }

    public function article () {
        return $this->belongsTo(Article::class) ;
    }
}
