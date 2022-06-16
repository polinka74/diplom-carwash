
@extends('layouts.admin_layout')


@section('title', 'Все товары')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Все товары</h1>
          </div>
        </div>
      </div>
      @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hiden="true">x
            </button>
            <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
        </div>
        @endif
</div>

<div class="col-lg-12">
<div class="card card-primary">
<div class="card">
          <div class="card-body p-0" style="display: block;">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #ID
                      </th>
                      <th style="width: 20%">
                          Название
                      </th>
                      <th style="width: 30%">
                          Время
                      </th>
                      <th>
                          Цена
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($prices as $price)
                  <tr>
                      <td>
                          {{$price->id}}
                      </td>
                      <td>
                          <a>
                          {{$price->name}}
                          </a>
                      </td>
                      <td>
                          {{$price->time}}
                      </td>
                      <td>
                        <p> {{$price->service_price}}</p>
                      </td>
                      <td class="project-actions text-right">
                       
                          <a class="btn btn-info btn-sm" href="{{route('prices.edit', $price->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редактировать
                          </a>
                          <form action="{{route('prices.destroy', $price->id)}}" method="post" style="display: inline-block">
                              @csrf
                              @method('DELETE')
                               <button type="submit" class="btn btn-danger btn-sm delete-btn">
                              <i class="fas fa-trash">
                              </i>
                              Удалить
                          </button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
</div>

</div>

@endsection