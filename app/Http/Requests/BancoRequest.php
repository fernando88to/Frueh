<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
 * #php artisan make:request BancoRequest
 * Class BancoRequest
 * @package App\Http\Requests
 */
class BancoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//indica que essa classe pode ser usada
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:255',
            'endereco' => 'max:500',
            'ativo' => 'required|boolean',
            'codigo_febraban'=>'required|numeric'
        ];
    }
}
