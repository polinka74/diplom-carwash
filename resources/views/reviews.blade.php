@extends('layout')


@section('title','Отзывы')
@section('content')
<div class="container p-4 p-md-5 mb-4">
    <h3 class="moikam-4" >Отзывы</h3>
<hr>
    <div class="row justify-content-center align-items-center">
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
        <form method="POST" action="/reviews" class="form">
            @csrf
            <div class="form-group row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Введите имя</label>
                <div class="col-md-6">
                    <input type="text" name="name" placeholder="Введите Ваше имя" id="name" class="form-control">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="message" class="col-md-4 col-form-label text-md-end">Введите сообщение</label>
                <div class="col-md-6">
                <input type="text" name="message" placeholder="Введите Ваше сообщение" id="message"
                    class="form-control form2">
                    </div>
            </div>
            <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
            

        </form>
    </div>

</div>
@endsection