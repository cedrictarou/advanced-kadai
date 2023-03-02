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
            'last_name' => 'required | max:255',
            'first_name' => 'required | max:255',
            'gender' => 'required | regex:/^[1-2]$/',
            'email' => 'required | email',
            'postcode' => 'required | regex:/^[0-9]{3}-[0-9]{4}$/',
            'address' => 'required | max:255',
            'opinion' => 'required | max:120'
        ];
    }
    public function messages()
    {
        return [
            'last_name.required' => $this->require('姓（上の名前）'),
            'last_name.max' => $this->max(255),
            'first_name.required' =>
            $this->require('名（下の名前）'),
            'first_name.max' =>
            $this->max(255),
            'gender.required'
            => $this->require('性別'),
            'email.required' =>
            $this->require('Eメール'),
            'email.email' => 'メールアドレスの入力形式をご確認ください。',
            'postcode.required'
            => $this->require('郵便番号'),
            'postcode.regex' => '郵便番号の入力形式をご確認ください。',
            'address.required' =>
            $this->require('住所'),
            'address.max' =>
            $this->max(255),
            'opinion.required'
            => $this->require('ご意見'),
            'opinion.max' => $this->max(120)
        ];
    }

    private function max($num)
    {
        return "{$num}字以内にしてください。";
    }

    private function require($item)
    {
        return "{$item}を入力してください。";
    }
}
