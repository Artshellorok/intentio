@extends('layouts/master')

@section('content')
<div class="flex-column">


<div class="nounderline footermargin">
    <h1 class='text-center' style='margin-top: 30px; padding-bottom: 30px;'>Выберите категорию</h1>
    @foreach($categories as $category)
        <a href="/category/{{$category->id}}/?type={{request('type')}}" class="nounderline">
            <div class="bg-alert div1 mb-2 rounded ">
                <div class="text-light text1  mb-2">
                <p class="text-light ml-3">{{$category->name}}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>


</div>
<style>
    .footer{
        position:absolute;
        width: 100vw;
        bottom:0;
        left: 0;
    }

</style>




@endsection