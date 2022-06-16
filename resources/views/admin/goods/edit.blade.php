
@extends('layouts.admin_layout')


@section('title', 'Добавить товар')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование товара {{$goods['title']}}</h1>
          </div><!-- /.col -->
    
        </div><!-- /.row -->
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hiden="true">x
            </button>
            <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
        </div>
        @endif
      </div><!-- /.container-fluid -->
</div>
<div class="col-lg-12">
<div class="card card-primary">
              <form action="{{route('goods.update', $goods['id'])}}" method="POST">
              @method('PUT')    
              @csrf
                  
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="text"  name="image" value="{{$goods['image']}}" class="form-control" id="exampleInputEmail1" placeholder="Введите путь картинки" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title"  value="{{$goods['title']}}" class="form-control" id="exampleInputPassword1" placeholder="Введите название товара" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" name="price" value="{{$goods['price']}}" class="form-control" id="exampleInputPassword1" placeholder="Введите цену" required>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">descript</label>
                    <input type="text" name="descript" value="{{$goods['descript']}}" class="form-control" id="exampleInputPassword1" placeholder="Введите сокращенное описание" required>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">description</label>
                    <input type="text" name="description" value="{{$goods['description']}}" class="form-control" id="exampleInputPassword1" placeholder="Введите полное описание" required>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">characteristics</label>
                    <input type="text" name="characteristics" value="{{$goods['characteristics']}}" class="form-control" id="exampleInputPassword1" placeholder="Введите характеристики" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
              </form>
            </div>

</div>

@endsection