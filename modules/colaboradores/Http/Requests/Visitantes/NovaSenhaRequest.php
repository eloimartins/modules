<?php

namespace Modules\Colaboradores\Http\Requests\Visitantes;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class NovaSenhaRequest extends FormRequest
{
    protected $errorBag = 'form';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'bail|required|max:80',
            'email' => 'required|unique:colaborador_emails|unique:pre_cadastros|max:100',
            'celular' => 'required|unique:colaborador_telefones,telefone|unique:pre_cadastros|max:15',
        ];
    }

    /**
    * Custom message for validation
    *
    * @return array
    */
    public function messages()
    {
        return [
            'nome.required' => 'Você não preencheu o campo NOME!',
            'cpf.required' => 'CPF Inválido!',
            'email.required' => 'Você não preencheu o campo E-MAIL!'
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            'nome' => 'trim|capitalize|escape',
            'email' => 'trim|lowercase'
        ];
    }

/*    protected function formatErrors(Validator $validator)
    {
        dd('Samuel & Ester');
        return $validator->errors()->all();
    }

    public function response(array $errors)
    {
        dd('1');
        return response()->json($errors, 200);
    } */
}
