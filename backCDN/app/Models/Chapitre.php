<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $titre_id
 * @property string $nom
 * @property string $numero
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Article[] $articles
 * @property Titre $titre
 * @property Section[] $sections
 */
class Chapitre extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['titre_id', 'nom', 'numero', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function titre()
    {
        return $this->belongsTo('App\Models\Titre');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }
}
