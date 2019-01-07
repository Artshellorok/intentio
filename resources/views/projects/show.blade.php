@extends('layouts.master')
@section('content')
    <div class="col-lg-12">

        <h1 class="mt-4">{{$project->title}}</h1>

        <p class="lead">
          {{$project->user->email}}
        </p>

        <hr>
        <p>{{$project->created_at->diffForHumans()}}</p>

        <hr>
        <img class="img-fluid rounded" src="{{$project->image}}" alt="">

        <hr>
        <h5>Цена: {{$project->cost}} рублей</h5>
        <p class="lead">{{$project->description}}</p>
        @auth
          @if(auth()->user()->id == $project->user->id)
          @foreach($project->employers()->wherePivot('status', 'Рассматривается')->get() as $user)
            <div class="media mb-4">
              <div class="media-body">
                <h5 class="mt-0">{{$user->email}}</h5>
                {{$user->pivot->offer}}
                <div class="d-flex">
                  <form method='POST' action='/development/{{$project->id}}/accept'>
                    @csrf
                    <input type='hidden' value='{{$user->pivot->channel_id}}' name='relation'>
                    <button type="submit" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 font-weight-bold mr-2">+</button>
                  </form>
                  <form method='POST' action='/development/{{$project->id}}/decline'>
                    @csrf
                    <input type='hidden' name='relation' value='{{$user->pivot->channel_id}}'>
                    <button type="submit" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 font-weight-bold">-</button>
                  </form>
                </div>
                
              </div>
              
            </div>
          @endforeach
          @endif
        @endauth
        @auth('employer')
          @foreach($project->employers()->wherePivot('employer_id', '=', auth()->guard('employer')->user()->id)->get() as $order)
          <div class="media mb-4">
            <div class="media-body">
                <h5 class="mt-0">{{$order->email}}</h5>
                <span style='margin-bottom: 0'>Статус:
                    {{$order->pivot->status}}
                    
                </span>
                <p class='no-margin'>
                    id: {{$order->pivot->channel_id}}<br>
                    {{$order->pivot->created_at->diffForHumans()}}
                </p>
            </div>
          </div>
          @endforeach
          <div class="card my-4">
            <h5 class="card-header">Отправить предложение:</h5>
            <div class="card-body">
              <form method='POST' action='/development/{{$project->id}}/offer'>
                @csrf
                <div class="form-group">
                  <textarea class="form-control" rows="3" name='offer'></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
              </form>
            </div>
          </div>
        @endauth
      </div>
@endsection