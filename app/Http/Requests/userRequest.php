<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            //
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'min:8'],
            'status' => ['required', 'max:255'],
            'password' => ['required', 'string', 'max:30', 'min:8'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Por favor, insira o nome.',
            'password.required' => 'Por favor, insira uma senha.',
            'email.required' => 'Por favor, insira um email.',
            'name.min' => 'O nome deve ter no mínimo :min caracteres.',
            'name.max' => 'O nome deve ter no máximo :max caracteres.',
            'password.min' => 'A senha deve ter no mínimo :min caracteres.',
            'password.max' => 'A senha deve ter no máximo :max caracteres.',
            'status.required' => 'Por favor, selecione o status do usuário.',

        ];
    }
}
