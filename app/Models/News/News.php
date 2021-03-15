<?php

declare(strict_types=1);

namespace App\Models\News;

use App\Models\ImageNews\ImageNews;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App\Models\News
 */
class News extends Model
{
    /**
     * @var string
     */
    protected $table = 'news';

    /**
     * @var string[]
     */
    protected $fillable = [
        'author_id',
        'title',
        'subtitle',
        'description',
        'published_at',
        'slug',
        'active',
        'created_at'
    ];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array|string[]
     */
    public array $rules = [
        'autor_id' => 'required|numeric',
        'titulo' => 'required|min:20|max:100',
        'subtitulo' => 'required|min:20|max:155',
        'descricao' => 'required|min:100',
        'slug' => 'required'
    ];
}
