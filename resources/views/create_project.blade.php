@extends('layouts.master')
@section('content')
    <div class="col-lg-12">
        <form method='POST' enctype='multipart/form-data' action='/project_create'>
            @csrf
            <h1 class="mt-4">Новый проект</h1>
            <div class='form-groups'>
                <div class="form-group">
                    <label for="exampleInputEmail1">Название</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Кого вы ищите и какую работу нужно выполнить" name='title'>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Подробно опишите задание</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder='Укажите требованию к исполнителю и результату, сроки выполнения и другие условия работы' name='demand'></textarea>
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
                    <label for="Budget">Бюджет(в рублях)</label>
                    <input class="form-control" type="number" value='0' id="Budget" name='budget'>
                </div>
                <div class='form-group' style='margin-left: 25px;'>
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name='dogovor'>
                    <label class="form-check-label" for="inlineCheckbox1">По договоренности</label>
                </div>
                <div style='width: 700px'>
                    <button type="submit" class="btn btn-primary btn-reg" style='margin-top: 40px; width: 100%;'>Опубликовать проект</button>
                </div>
                <div style='padding-bottom: 100px;'></div>
            </div>
        </form>
      </div>
@endsection