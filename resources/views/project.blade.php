@extends('layouts.master')
@section('content')
    <div class="col-lg-12">

        <h1 class="mt-4">{{$problem->title}}</h1>

        <p class="lead">
          by
          <a href="#">{{$problem->employer->email}}</a>
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
        <hr>


        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vu
            lputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            <div class="d-flex">
              <button type="button" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 font-weight-bold mr-2">+</button>
              <button type="button" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 font-weight-bold">-</button>
            </div>
            
          </div>
          
        </div>

        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
             sollicitudin. Cras purus odio, vestibulum in vulp
            utate at, tempus viverra turpis. Fusce condimentum nunc ac nisi v
            ulputate fringil
            la. Donec lacinia congue felis in faucibus.
            <div class="d-flex">
              <button type="button" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 font-weight-bold mr-2">+</button>
              <button type="button" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 font-weight-bold">-</button>
            </div>
            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras p
                urus odio, vestibulum in vulputate at, tempus viverra turpis. Fusc
                e condimentum 
                nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                
                <div class="d-flex">
              <button type="button" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 font-weight-bold mr-2">+</button>
              <button type="button" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 font-weight-bold">-</button>
            </div>
              </div>
            </div>
            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras pur
                us odio, vestibulum in vulputate at, tempus viverra turpis. F
                usce condimentu
                m nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                <div class="d-flex">
              <button type="button" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 font-weight-bold mr-2">+</button>
              <button type="button" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 font-weight-bold">-</button>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection