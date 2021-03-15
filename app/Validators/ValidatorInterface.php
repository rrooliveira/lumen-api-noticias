<?php

declare(strict_types=1);

namespace App\Validators;

interface ValidatorInterface
{
    public function validate();

    public function rules(): array;

    public function messages(): array;
}