<?php

declare(strict_types=1);

namespace App\Domain\News\Validator;

use App\Validators\ValidatorInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsValidator implements ValidatorInterface
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function validate()
    {
        return Validator::make($this->request->all(), $this->rules(), $this->messages());
    }

    public function rules(): array
    {
        return [
            'autor_id' => 'required|numeric',
            'titulo' => 'required|min:20|max:100',
            'subtitulo' => 'required|min:20|max:155',
            'descricao' => 'required|min:20',
            'slug' => 'required'
        ];
    }

    public function messages(): array
    {
        //INSERIR AS MENSAGENS DE RETORNO
        return [];
    }
}