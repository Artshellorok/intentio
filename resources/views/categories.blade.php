@extends('layouts/master')

@section('content')
<div class="flex-column">


<div class="nounderline footermargin">
    <h1 class='text-center' style='margin-top: 30px; padding-bottom: 30px;'>Выберите категорию</h1>
    <a href="/business_reg" class="nounderline">
        <div class="bg-alert div1 mb-2 rounded ">
            <div class="text-light text1  mb-2">
            <p class="text-light ml-3">Тестирование продуктов</p>
            </div>
        </div>
    </a>
    


    <a href="/scientist_reg" class="nounderline">
        <div class="bg-alert div1 mb-2 rounded ">
            <div class="text-light text1  mb-2 nounderline">
            <p class="text-light ml-3 nounderline">Нейроинженерия</p>
            </div>
        </div>
    </a>
    
    <a href="#" class="nounderline">
        <div class="bg-alert div1 mb-2 rounded ">
            <div class="text-light text1  mb-2 nounderline">
            <p class="text-light ml-3 nounderline">Обработка семян</p>
            </div>
        </div>
    </a>
    
    <a href="#" class="nounderline">
        <div class="bg-alert div1 mb-2 rounded ">
            <div class="text-light text1  mb-2 nounderline">
            <p class="text-light ml-3 nounderline">Генная модификация</p>
            </div>
        </div>
    </a>
    
    <a href="#" class="nounderline">
        <div class="bg-alert div1 mb-2 rounded ">
            <div class="text-light text1  mb-2 nounderline">
            <p class="text-light ml-3 nounderline">Проектирование и инжиниринг</p>
            </div>
        </div>
    </a>
    

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