@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
                    <ul>
                    @foreach($articles as $article)
                        <li><a href="{{url('article',$article->id)}}">{{$article->title}}</a></li>
                    @endforeach
                    </ul>
                    {!! $articles->render()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
