@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="{{url('/')}}">Home</a></div>

                    <div class="panel-body">
                       <p>{{$article->title}}</p>
                       <p>{{$article->body}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
