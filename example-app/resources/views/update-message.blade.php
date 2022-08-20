@extends('layouts.app')
@section('title-block')Обновление записи@endsection
@section('content')

    <h1>Обновление записи</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        {{-- добавляем зашишеный ключ(ключ безопасности) ларавел добавляет таким образов безопасность в формы --}}
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            {{--value="{{$data->name}}" - нужен чтобы пользователь не вводил все по новой а редактировал то что раньше написал--}}
            <input type="text" name="name" value="{{$data->name}}" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Введите email</label>
            <input type="text" name="email" value="{{$data->email}}" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообшения</label>
            <input type="text" name="subject" value="{{$data->subject}}" placeholder="Тема сообшения" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообшение</label>
            <textarea name="message" id="message" class="form-control"
                      cols="30" rows="10" placeholder="Введите сообшение">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success mt-1">Обновить</button>
    </form>
@endsection
