<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email'=>'required|email',
            'subject'=>'required|min:3|max:250',
            'mes' => 'required|min:5|max:2000'
        ];
    }

    public function messages() {
        return[
            'name.required' => 'Поле имя является обязательным',
            'email.required' => 'Поле email является обязательным',
            'subject.required' => 'Введите тему письма',
            'mes.required' => 'Введите сообщение',
            'email.email'=>'Введите корректный email адрес',
            'subject.min'=>'Тема письма должна быть не менее 3 символов',
            'subject.max'=>'Тема письма должна быть не более 250 символов',
            'mes.min'=>'Письмо должно быть не менее 5 символов',
            'mes.max'=>'Письмо должно быть не более 2000 символов',
        ];
    }
}
