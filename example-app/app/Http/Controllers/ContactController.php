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
     public function updateMessage($id){
         $contact = new Contact;
         return view('update-message',['data'=> $contact->find($id)]);
     }

    public function updateMessageSubmit($id, ContactRequest $req){
        $contact = Contact::find($id);/*обрашаемся к классу/ выбераем запись и помещаем в обьект $contact*/
        $contact -> name = $req->input('name');/*обновляем данные*/
        $contact -> email = $req->input('email');/*обновляем данные*/
        $contact -> subject = $req->input('subject');/*обновляем данные*/
        $contact -> message = $req->input('message');/*обновляем данные*/
        $contact->save();/*сохраняем данные*/
        /*передаем вторым параметром динамическое значение - $id */
        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено');/*переадресуем пользователя на другую страничку*/
    }
    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }


}
