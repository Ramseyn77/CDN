<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @property UserArticle[] $userArticles
 */
class User extends Model
{
    use HasFactory ;
    /**
     * @var array
     */
    protected $fillable = ['nom', 'prenom', 'email', 'email_verified_at', 'password', 'profession', 'profil', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultations()
    {
        return $this->belongsToMany('App\Models\Article');
    }

    public function recherches(){
        return $this->hasMany(Recherche::class) ;
    }
}
