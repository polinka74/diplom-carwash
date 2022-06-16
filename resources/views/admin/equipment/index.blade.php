
@extends('layouts.admin_layout')


@section('title', 'Все оборудование')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Все оборудование</h1>
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
                      <th style="width: 20%">
                          Картинка
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($equipments as $equipment)
                  <tr>
                      <td>
                          {{$equipment->id}}
                      </td>
                      <td>
                          <a>
                          {{$equipment->text}}
                          </a>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img class="w-100" src="/{{$equipment->image}}">
                              </li>
                          </ul>
                      </td>
              
                      <td class="project-actions text-right" >
                       
                          <a class="btn btn-info btn-sm" href="{{route('equipment.edit', $equipment->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редактировать
                          </a>
                         
                          <form action="{{route('equipment.destroy', $equipment->id)}}" method="post" style="display: inline-block">
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