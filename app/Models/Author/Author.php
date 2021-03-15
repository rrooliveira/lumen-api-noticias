<?php

declare(strict_types=1);

namespace App\Models\Author;

use App\Models\News\News;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Author
 * @package App\Models\Author
 */
class Author extends Model
{
    /**
     * @var string
     */
    protected $table = 'authors';

    /**
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'gender',
        'active',
        'created_at'
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'password'
    ];

    /**
     * @var bool
     */
    public $timestamps = false; //updated_at / deleted_at

    /**
     * @var array
     */
    public array $rules = [
        'nome' => 'required|min:2|max:45|alpha',
        'sobrenome' => 'required|min:2|max:60|alpha',
        'email' => 'required|email|max:100|email:rfc,dns',
        'senha' => 'required|between:6,12',
        'sexo' => 'required|alpha|max:1'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news()
    {
        return $this->hasMany(News::class);
    }
}
