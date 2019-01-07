@extends('layouts.master')
@section('content')

    <div class="col-lg-12">
        <div style='margin-top: 20px; margin-bottom: 40px;'>
            Категория
            <select class="custom-select tupafleximesketituu" id="inputGroupSelect01" onchange='flex()'>
                    <option value="">Все</option>
                    @foreach($categories as $category)
                    <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
            </select>
        </div>
        @foreach($projects as $project)
            <div class='project'>
                <h1 class="mt-4"><a href='/development/{{$project->id}}'>{{$project->title}}</a></h1>
                <a href="/developments/{{$project->category->name}}">{{$project->category->name}}</a>
                <p class="lead">
                by
                {{$project->user->email}}
                </p>

                <hr>
                
                <p>{{$project->created_at->diffForHumans()}}</p>
                <img class="img-fluid rounded" src="{{$project->image}}" alt="">
                <hr>
                <h5>Цена: {{$project->cost}} рублей</h5>
                <p class="lead">{{$project->description}}</p>
                
            </div>
        @endforeach
    </div>
    <script type='text/javascript'>
        let getCookie = function(name) {
    var matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  } 
            if(getCookie('flex')){
                document.querySelector('.tupafleximesketituu').value = getCookie('flex');
            }
        function flex(){
            let tupaflex = document.querySelector('.tupafleximesketituu').value;
            setCookie('flex', tupaflex);
            window.location.replace("/developments/" + tupaflex);
        }
        </script>
@endsection