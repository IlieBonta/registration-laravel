@extends('layouts.app')

@section('title-block')главная страница@endsection


@section('content')
<h1> привет ты на главной странице</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blan
    ditiis earum exercitationem maiores sed? Beatae culpa dignissimos dolore doloribus, ducimus fuga in m
    agnam neque nesciunt obcaecati optio perferendis placeat praesentium quia quidem repellendus soluta sunt voluptas volupt
    ate voluptates. At dignissimos ducimus eligendi eum itaque nam quod saepe sapiente ut voluptatum.</p>
@endsection

@section('aside')
    @parent
    <p> дополнительный текст</p>
@endsection
