<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $section_id
 * @property integer $chapitre_id
 * @property integer $titre_id
 * @property string $nom
 * @property string $numero
 * @property string $contenu
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Aliena[] $alienas
 * @property Chapitre $chapitre
 * @property Titre $titre
 * @property Section $section
 * @property UserArticle[] $userArticles
 */
class Article extends Model
{
    use HasFactory ;
    /**
     * @var array
     */
    protected $fillable = ['section_id', 'chapitre_id', 'titre_id', 'nom', 'numero', 'contenu', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alienas()
    {
        return $this->hasMany('App\Models\Aliena');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function chapitre()
    {
        return $this->belongsTo('App\Models\Chapitre');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function titre()
    {
        return $this->belongsTo('App\Models\Titre');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultation_users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
