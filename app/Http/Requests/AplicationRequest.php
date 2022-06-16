<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AplicationRequest extends FormRequest
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
            'name' => 'required|min:4|max:100',
            'email' => 'required|min:4|max:100',
            'quest' => 'required|min:10|max:100',
            'message' => 'required|min:10|max:500'
        ];
    }
    public function attributes(){
        return[
            'name' => 'Имя',
            'email' => 'email',
            'quest' => 'вопрос',
            'message' => 'сообщение'
        ];
    }
}
