
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
                          Имя
                      </th>
                      <th style="width: 30%">
                          Комментарий
                      </th>
                      <th>
                          Вывод
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($review as $reviews)
                  <tr>
                      <td>
                          {{$reviews->id}}
                      </td>
                      <td>
                          <a>
                          {{$reviews->name}}
                          </a>
                      </td>
                      <td>
                          <a>
                          {{$reviews->message}}
                          </a>
                      </td>
                      <td>
                          <a>
                          {{$reviews->vivod}}
                          </a>
                      </td>
                      <td class="project-actions text-right">
                       
                         <a class="btn btn-info btn-sm" href="{{route('review.edit', $reviews->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редактировать
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Удалить
                          </a>
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