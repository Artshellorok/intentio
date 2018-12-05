@extends('layouts.master')
@section('content')
    <div class="col-lg-12">
        @foreach($problems as $problem)
            <div class='project'>
                <h1 class="mt-4"><a href='/project/{{$problem->id}}'>{{$problem->title}}</a></h1>

                <p class="lead">
                by
                <a href="#">{{$problem->employer->email}}</a>
                </p>

                <hr>
                <p>{{$problem->created_at->diffForHumans()}}</p>

                <img class="img-fluid rounded" src="{{$problem->image}}" alt="">

                <hr>
                <p class="lead">{{$problem->demands}}</p>
            </div>
        @endforeach
    </div>
@endsection