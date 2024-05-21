<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Titre[] $titres
 */
class Livre extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nom', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function titres()
    {
        return $this->hasMany('App\Models\Titre');
    }
}
