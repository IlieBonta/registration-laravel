<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller{
    public function submit(ContactRequest $req){
        $contact = new Contact();
        $contact -> name = $req->input('name');
        $contact -> email = $req->input('email');
        $contact -> subject = $req->input('subject');
        $contact -> message = $req->input('message');
        $contact->save();
        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }
    public function allData() {
        $contact = new Contact;
     /* dd(Contact::all()); /*благодаря функции all мы получаем все данные из таблицы*/
        return view('messages',['data'=> $contact->all()]); // в параметре data будут передаватся все записи из базы данных которые мы получаем

    }
     public function showOneMessage($id){
        $contact = new Contact;
        return view('one-message',['data'=> $contact->find($id)]);
     }


}
