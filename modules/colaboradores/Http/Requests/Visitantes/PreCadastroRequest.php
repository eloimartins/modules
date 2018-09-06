<?php

namespace Modules\Colaboradores\Http\Requests\Visitantes;

use Illuminate\Foundation\Http\FormRequest;

class PreCadastroRequest extends FormRequest
{
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
            'nome' => 'bail|required|max:80',
            'cpf' => 'required|unique:colaborador_pf|unique:pre_cadastros,cpf|max:11',
            'email' => 'required|unique:colaborador_emails|unique:pre_cadastros|max:100',
            'celular' => 'required|unique:colaborador_telefones,telefone|unique:pre_cadastros|max:15',
            'data_nascimento' => 'required|date',
            'senha' => 'required|same:confirma_senha|min:4',
            'confirma_senha' => 'required',
            'plano' => 'required',
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
}
