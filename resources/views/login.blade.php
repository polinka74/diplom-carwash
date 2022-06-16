@extends('layout')


@section('title','Регистрация')
@section('content')

<div class="container">
    <h3 class="m-4">Вход</h3>
    <hr>
    @if($errors->any())
    <div class="row justify-content-center">
        <div class="col-md-8 alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <div class="col-md-10">
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">E-mail</label>
            <div class="col-md-6">
                <input type="text" id="email" class="form-control" name="email" value="{{old('email')}}"
                    autocomplete="email" title="Обязательно @">
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>
            <div class="col-md-6">
                <input type="password" id="password" class="form-control" name="password" value="{{old('password')}}"
                    autocomplete="current-password">
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary " name="btnLogin">
                    Войти</button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection