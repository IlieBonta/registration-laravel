@extends('layouts.app')

@section('title-block')$data->subject@endsection


@section('content')
    <h1>$data->subject</h1>
    @foreach($data as $el) {{--$el это элемент--}}
    <div class="alert alert-info">
        <h3>{{$el->subject}}</h3>
        <p>{{$el->email}}</p>
        <p><small>{{$el->created_at}}</small></p>
        <a href="{{route('contact-data-one', $el->id)}}"><button class="btn btn-warning"> Детальнее</button></a>
    </div>
    @endforeach


@endsection
