
@extends('layouts.admin_layout')


@section('title', 'Добавить товар')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавление товара</h1>
          </div><!-- /.col -->
    
        </div><!-- /.row -->
        <!-- @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hiden="true">x
            </button>
            <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
        </div>
        @endif -->
      </div><!-- /.container-fluid -->
</div>
<div class="col-lg-12">
<div class="card card-primary">
              <form action="{{route('prices.update', $price['id'])}}" method="POST">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" value="{{$price['name']}}" class="form-control" id="exampleInputEmail1" placeholder="Введите название" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Time</label>
                    <input type="text"  name="time" value="{{$price['time']}}" class="form-control" id="exampleInputPassword1" placeholder="Введите время" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Service_price</label>
                    <input type="text" name="service_price" value="{{$price['service_price']}}" class="form-control" id="exampleInputPassword1" placeholder="Введите цену" required>
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