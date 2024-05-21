<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $article_id
 * @property string $contenu
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Article $article
 */
class Aliena extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['article_id', 'contenu', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }
}
