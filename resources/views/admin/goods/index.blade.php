
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
                      <th style="width: 10%">
                          Название
                      </th>
                      <th style="width: 5%">
                          Картинка
                      </th>
                      <th>
                          Цена
                      </th>
                      <th style="width: 20%">
                          Кр.описание
                      </th>
                      <th style="width: 20%">
                          Полное описание
                      </th>
                      <th style="width: 10%">
                         Характеристики
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($goodss as $good)
                  <tr>
                      <td>
                          {{$good['id']}}
                      </td>
                      <td>
                          <a>
                          {{$good['title']}}
                          </a>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="/{{$good->image}}">
                              </li>
                          </ul>
                      </td>
                      <td>
                              <p> {{$good['price']}}</p>
                      </td>
                      <td>
                              <p> {{$good['descript']}}</p>
                      </td>
                      <td>
                              <p> {{$good['description']}}</p>
                      </td>
                       <td>
                              <p> {{$good['characteristics']}}</p>
                      </td>
                      <td class="project-actions text-right">
                       
                          <a class="btn btn-info btn-sm" href="{{route('goods.edit', $good->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редактировать
                          </a>
                          
                          <form action="{{route('goods.destroy', $good->id)}}" method="post" style="display: inline-block">
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