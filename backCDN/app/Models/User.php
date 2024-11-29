<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

/**
 * @property integer $id
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $profession
 * @property string $profil
 * @property string $created_at
 * @property string $updated_at
 * @property string $verification_code
 * @property UserArticle[] $userArticles
 */
class User extends Authenticatable
{
    use HasFactory ;
    use Notifiable ;
    /**
     * @var array
     */
    protected $fillable = ['name','nom', 'prenom', 'email', 'email_verified_at', 'password','verification_code' ,'profession', 'profil', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultations()
    {
        return $this->belongsToMany('App\Models\Article', 'user_article');
    }

    public function recherches(){
        return $this->hasMany(Recherche::class) ;
    }

    public function comments(){
        return $this->hasMany(Comment::class) ;
    }

    public function events(){
        return $this->hasMany(Event::class) ;
    }
    public function setNomAttribute($value){
        $this->attributes['nom'] = $value ?? 'Admin';
    }
    public function setPrenomAttribute($value)
    {
        $this->attributes['prenom'] = $value ?? 'admin';
    }
}
