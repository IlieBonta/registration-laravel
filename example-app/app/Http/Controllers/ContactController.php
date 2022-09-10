<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req): \Illuminate\Http\RedirectResponse
    {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();
        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }

    public function allData(): Factory|View|Application
    {
        $contacts = Contact::all();
        /* dd(Contact::all()); /*благодаря функции all мы получаем все данные из таблицы*/
        return view('messages', ['data' => $contacts]); // в параметре data будут передаватся все записи из базы данных которые мы получаем

    }

    public function showOneMessage($id): Factory|View|Application
    {
        $contacts = Contact::all();
        return view('one-message', ['data' => $contacts->find($id)]);
    }

    public function updateMessage($id): Factory|View|Application
    {
        $contacts = Contact::all();
        return view('update-message', ['data' => $contacts->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req): \Illuminate\Http\RedirectResponse
    {
        $contact = Contact::find($id);/*обрашаемся к классу/ выбераем запись и помещаем в обьект $contact*/
        $contact->name = $req->input('name');/*обновляем данные*/
        $contact->email = $req->input('email');/*обновляем данные*/
        $contact->subject = $req->input('subject');/*обновляем данные*/
        $contact->message = $req->input('message');/*обновляем данные*/
        $contact->save();/*сохраняем данные*/
        /*передаем вторым параметром динамическое значение - $id */
        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено');/*переадресуем пользователя на другую страничку*/
    }

    public function deleteMessage($id): \Illuminate\Http\RedirectResponse
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }


}
