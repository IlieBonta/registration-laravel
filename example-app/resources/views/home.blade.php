@extends('layouts.app')

@section('title-block') Little Vincent's Pizza @endsection


@section('content')
<h1>Meet the Little Vincent's Pizza ! </h1>
<p> &nbsp;  Best Pizza in town! If you're not gonna take our word for it, come and try!<br><br>
    &nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blan ditiis earum exercitationem maiores sed?
    Beatae culpa dignissimos dolore doloribus, ducimus fuga in magnam neque nesciunt obcaecati optio
    perferendis placeat praesentium quia quidem repellendus soluta sunt voluptas volupt
    ate voluptates.<br>
    At dignissimos ducimus eligendi eum itaque nam quod saepe sapiente ut voluptatum.</p>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        @if(session('status'))
                            <div class="alert alert-success">
                               {{session('status')}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('aside')
    @parent
   {{-- <p> дополнительный текст</p>--}}
@endsection
