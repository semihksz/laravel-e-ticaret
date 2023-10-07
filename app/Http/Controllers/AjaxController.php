<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    //burada Request alanına yeni oluşturduğum ContactFormRequest adını ekliyorum kontrolleri bu sayfadan yapacağım
    public function contactsave(ContactFormRequest $request)
    {

        //bu alan bu şekilde kontrol edilerek ve türkçelerini yazarak kullanılabilir ancak daha düzenli bir yolu var.
        //php artisan make:request ContactFormRequest ile bir dosa oluşturup tüm bu kontrolleri orada yapabiliriz
        // $validationData = $request->validate([
        //     'fname' => 'required|string',
        //     'lname' => 'required|string',
        //     'email' => 'required|email:rfc,dns',
        //     'subject' => 'required',
        //     'message' => 'required',
        // ], [
        //     'fname.required' => 'Bu alanı doldurmak zorunludur!',
        //     'fname.string' => 'Bu alan sadece karakterlere izin vermektedir!',
        //     'lname.required' => 'Bu alanı doldurmak zorunludur!',
        //     'lname.string' => 'Bu alan sadece karakterlere izin vermektedir!',
        //     'email.required' => 'Bu alanı doldurmak zorunludur!',
        //     'email.email' => 'Lütfen geçerli bir mail adresi giriniz!',
        //     'subject.required' => 'Bu alanı doldurmak zorunludur!',
        //     'message.required' => 'Bu alanı doldurmak zorunludur!',
        // ]);

        $contactData = $request->all();
        Contact::create($contactData);
        session()->flash('success', 'Your message was sent successfully.');
        return redirect()->back();
    }
}
