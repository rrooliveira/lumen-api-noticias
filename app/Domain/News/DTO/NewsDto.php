<?php

declare(strict_types=1);

namespace App\Domain\News\DTO;

use Laravel\Lumen\Http\Request;
use Spatie\DataTransferObject\DataTransferObject;

class NewsDto extends DataTransferObject
{
    /**
     * @var int
     */
    public int $author_id;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $subtitle;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var string
     */
    public string $slug;

    public static function fromRequest(Request $request): self
    {
        return new self([
            'author_id' => $request->input('autor_id'),
            'title' => $request->input('titulo'),
            'subtitle' => $request->input('subtitulo'),
            'description' => $request->input('descricao'),
            'slug' => $request->input('slug'),
        ]);
    }
}