@extends('layouts.master')
@section('content')
    <div class='col-lg-12'>
            <div class='wrapper-form'>
            <h1 class='text-center reg-title' style='margin-bottom: 35px;'>Зарегистрироваться как исполнитель</h1>
                <form method='POST' action='/scientist_reg'>
                    @csrf
                    <div class='form-wrapper'>
                        <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите e-mail" class='fleximtupa' name='email'>
                        <small id="emailHelp" class="form-text text-muted form-description">Введите свой адрес электронной почты.</small>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Пароль</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль" class='fleximtupa' name='password'>
                        </div>
                        <div class="form-group form-check rem_pass">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" class='fleximtupa'>
                        <label class="form-check-label" for="exampleCheck1" >Запомнить пароль</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-reg">Зарегистрироваться</button>
                        <div class='rem_pass text-center' style='margin-top: 30px; font-size: 18px !important;'>
                            <a href='/login_scientists'>Войти</a>
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection