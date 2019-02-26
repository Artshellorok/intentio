@extends('layouts.master')
@section('content')
    <div class='container avg1'>
    <h1 class="font-weight-bold text-center mb-4 ">За кого вы хотели бы войти?</h1>
        <div class='row'>
            <a href="/login_business" class="ml-auto mr-4">
            <button type="button" class="btn btn-primary avg"><span class="font-weight-bold">Работодатель</span></button>

            </a>

            <a href="/login_scientists" class="mr-auto ml-4">
            <button type="button" class="btn btn-success avg"><span class="font-weight-bold">Исполнитель</span></button>
            </a>
        </div>
    </div>
@endsection