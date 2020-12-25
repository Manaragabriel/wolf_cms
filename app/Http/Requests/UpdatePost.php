<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePost extends FormRequest
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
            'title' => 'required|max:256',
            'subtitle' => 'nullable|max:256',
            'content' => 'required',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'O titulo é obrigatório',
            'content.required' => 'O conteúdo do post é obrigatório',
        ];
    }
}
