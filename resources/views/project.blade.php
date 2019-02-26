@extends('layouts.master')
@section('content')
    <div class="col-lg-12">

        <h1 class="mt-4">{{$problem->title}}</h1>

        <p class="lead">
          {{$problem->employer->email}}
        </p>

        <hr>
        <p>{{$problem->created_at->diffForHumans()}}</p>

        <hr>
        <img class="img-fluid rounded" src="{{$problem->image}}" alt="">

        <hr>
        @if($problem->dogovor)
                    <h5>Бюджет: Договорной</h5>
                @else
                    <h5>Бюджет: {{$problem->budget}} рублей</h5>
                @endif
        <p class="lead">{{$problem->demands}}</p>
        <?php $nibba = $problem->users()->wherePivot('status', '=', 'Принято')->get()?>
        @if(count($nibba))
        @foreach($nibba as $nibba)
          <div class="media mb-4">
            <div class="media-body">
              <h5 class="mt-0">{{$nibba->email}}</h5>
              
              {{$nibba->pivot->offer}}
              <p>Статус:
                  {{$nibba->pivot->status}}
              </p>
            </div>
            
          </div>
          @auth
          @if($nibba->id != auth()->user()->id) 
              @if(auth()->user()->problems->contains($problem->id))
              <div class="media mb-4">
                <div class="media-body">
                  <h5 class="mt-0">{{auth()->user()->email}}</h5>
                  
                  {{$problem->users->find(auth()->user()->id)->pivot->offer}}
                  <p>Статус:
                      {{$problem->users->find(auth()->user()->id)->pivot->status}}
                  </p>
                </div>
                
              </div>
              @endif
          @endif
          @endauth
        @endforeach
        @else
          @auth
            @if(auth()->user()->problems->contains($problem->id))
              <div class="media mb-4">
                <div class="media-body">
                  <h5 class="mt-0">{{auth()->user()->email}}</h5>
                  
                  {{$problem->users->find(auth()->user()->id)->pivot->offer}}
                  <p>Статус:
                      {{$problem->users->find(auth()->user()->id)->pivot->status}}
                  </p>
                </div>
                
              </div>
            @else
              <div class="card my-4">
                <h5 class="card-header">Отправить предложение:</h5>
                <div class="card-body">
                  <form method='POST' action='/project/{{$problem->id}}/offer'>
                    @csrf
                    <div class="form-group">
                      <textarea class="form-control" rows="3" name='offer'></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                  </form>
                </div>
              </div>
            @endif
          @endauth
          @if(auth()->guard('employer')->check())
            @if(auth()->guard('employer')->user()->id == $problem->employer->id)
            @foreach($problem->users()->wherePivot('status', 'Рассматривается')->get() as $user)
            <div class="media mb-4">
                <div class="media-body">
                  <h5 class="mt-0">{{$user->email}}</h5>
                  {{$user->pivot->offer}}
                  <div class="d-flex">
                    <form method='POST' action='/project/{{$problem->id}}/accept'>
                      @csrf
                      <input type='hidden' value='{{$user->id}}' name='user'>
                      <button type="submit" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 font-weight-bold mr-2">+</button>
                    </form>
                    <form method='POST' action='/project/{{$problem->id}}/decline'>
                      @csrf
                      <input type='hidden' name='user' value='{{$user->id}}'>
                      <button type="submit" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 font-weight-bold">-</button>
                    </form>
                  </div>
                  
                </div>
                
              </div>
            @endforeach
          @endif
        @endif
      @endif
      </div>
@endsection