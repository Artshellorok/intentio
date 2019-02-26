@extends('layouts.master')
@section('content')
    <div class="col-lg-12">
        <form method='POST' enctype='multipart/form-data' action='/developments/create'>
            @csrf
            <h1 class="mt-4">Новая разработка</h1>
            <div class='form-groups'>
                <div class="form-group">
                    <label for="exampleInputEmail1">Название</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Какую разработку вы предлагаете бизнесу" name='title'>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Подробно опишите разработку</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder='Укажите подробности' name='description'></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Картинка</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name='image' >
                </div>
                <div class="form-group select-custome">
                    <label for="exampleFormControlSelect1">Категория</label>
                    <select class="form-control" id="exampleFormControlSelect1" style='width: 300px; max-width:300px' name='category_id' value="{{session('category')}}">
                      <option value='1'>Тестирование продуктов</option>
                      <option value='2'>Нейроинженерия</option>
                      <option value='3'>Обработка семян</option>
                      <option value='4'>Генная модификация</option>
                      <option value='5'>Проектирование и инжиниринг</option>
                    </select>
                </div>
                <div class="form-group select-flexim">
                    <label for="Budget">Цена(в рублях)</label>
                    <input class="form-control" type="number" value='0' id="Budget" name='cost'>
                </div>
                <div style='width: 700px'>
                    <button type="submit" class="btn btn-primary btn-reg" style='margin-top: 40px; width: 100%;'>Опубликовать разработку</button>
                </div>
                <div style='padding-bottom: 100px;'></div>
            </div>
        </form>
      </div>
@endsection