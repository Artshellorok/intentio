@extends('layouts.master')
@section('content')
    <div class="col-lg-12">
        <form>
            <h1 class="mt-4">Новый проект</h1>
            <div class='form-groups'>
                <div class="form-group">
                    <label for="exampleInputEmail1">Название</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Кого вы ищите и какую работу нужно выполнить">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Подробно опишите задание</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder='Укажите требованию к исполнителю и результату, сроки выполнения и другие условия работы'></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Картинка</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group select-custome">
                    <label for="exampleFormControlSelect1">Категория</label>
                    <select class="form-control" id="exampleFormControlSelect1" style='width: 300px; max-width:300px'>
                      <option>Тестирование продуктов</option>
                      <option>Нейроинженерия</option>
                      <option>Обработка семян</option>
                      <option>Генная модификация</option>
                      <option>Проектирование и инжиниринг</option>
                    </select>
                </div>
                <div class="form-group select-flexim">
                    <label for="Budget">Бюджет(в рублях)</label>
                    <input class="form-control" type="number" value='0' id="Budget">
                </div>
                <div class='form-group' style='margin-left: 25px;'>
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="dogovor">
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