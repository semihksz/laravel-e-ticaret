<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        //burayı her zaman true yapmam gerekiyor
        return true;
    }
    public function rules(): array
    {
        //burada kontrolleri yapıyorum
        return [
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email:rfc,dns',
            'subject' => 'required',
            'message' => 'required',
        ];
    }
    public function messages(): array
    {
        //burada ise gidecek hata mesajlarının türkçesini yazıyorum
        return [
            'fname.required' => 'Bu alanı doldurmak zorunludur!',
            'fname.string' => 'Bu alan sadece karakterlere izin vermektedir!',
            'lname.required' => 'Bu alanı doldurmak zorunludur!',
            'lname.string' => 'Bu alan sadece karakterlere izin vermektedir!',
            'email.required' => 'Bu alanı doldurmak zorunludur!',
            'email.email' => 'Lütfen geçerli bir mail adresi giriniz!',
            'subject.required' => 'Bu alanı doldurmak zorunludur!',
            'message.required' => 'Bu alanı doldurmak zorunludur!',
        ];
    }
}
