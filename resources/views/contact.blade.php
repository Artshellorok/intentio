@extends('layouts/master')

@section('content')
    <div class='col-lg-12'>
        <div class='row shithover' style='margin-top: 30px;'>
            @auth
                <?php $channels = auth()->user()->problems()->wherePivot('status', '=', 'Принято')->get(); ?>
                @foreach($channels as $channel)
                <a href='/chat/{{$channel->pivot->channel_id}}' class='media mb-4 rounded'>
                    <div class="media-body">
                        <h5 class="mt-0">{{$channel->employer->email}}</h5>          
                    </div>     
                </a>
                @endforeach
            @endauth
            @if(auth()->guard('employer')->check())
                <?php $problems = auth()->guard('employer')->user()->problems ?>
                @foreach($problems as $problem)
                    <?php $coolgay = $problem->users()->wherePivot('status', '=', 'Принято')->get()?>
                    @if(count($coolgay))    
                    <?php $coolgay = $coolgay[0] ?> 
                        <a href='/chat/{{$coolgay->pivot->channel_id}}' class='media mb-4 rounded'>
                            <div class="media-body">
                                <h5 class="mt-0">{{$coolgay->email}}</h5>          
                            </div>     
                        </a>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
@endsection