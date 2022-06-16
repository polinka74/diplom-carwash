
@extends('layouts.admin_layout')


@section('title', 'Добавить товар')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование изображения</h1>
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
              <form action="{{route('gallery.update', $gallery['id'])}}" method="POST">
              @method('PUT')    
              @csrf
                  
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="text"  name="image_1" value="{{$gallery['image_1']}}" class="form-control" id="exampleInputEmail1" placeholder="Введите путь картинки" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="image_2"  value="{{$gallery['image_2']}}" class="form-control" id="exampleInputPassword1" placeholder="Введите название товара" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" name="image_3" value="{{$gallery['image_3']}}" class="form-control" id="exampleInputPassword1" placeholder="Введите цену" required>
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