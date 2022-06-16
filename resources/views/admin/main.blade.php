@extends('layouts/admin_layout')
@section('title', 'Главная')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Главная</h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Главная</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>/.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner"><small>Количество постов</small>
                <h3>{{$goods_count}}</h3>

                <p>Таблица: Товары</p>
              </div>
              <div class="icon">
               
              </div>
              <a href="{{route('goods.index')}}" class="small-box-footer">Смотреть больше <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner"><small>Количество постов</small>
                <h3>{{$gallery_count}}</h3>

                <p>Таблица: Галерея</p>
              </div>
              <div class="icon">
             
              </div>
              <a href="{{route('gallery.index')}}" class="small-box-footer">Смотреть больше <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner"><small>Количество постов</small>
                <h3>{{$equipments_count}}</h3>

                <p>Таблица: Оборудование</p>
              </div>
              <div class="icon">
               
              </div>
              <a href="{{route('equipment.index')}}" class="small-box-footer">Смотреть больше <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner"><small>Количество постов</small>
                <h3>{{$prices_count}}</h3>

                <p>Таблица: Цены</p>
              </div>
              <div class="icon">

              </div>
              <a href="{{route('prices.index')}}" class="small-box-footer">Смотреть больше <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner"><small>Количество постов</small>
                <h3>{{$reviews_count}}</h3>

                <p>Таблица: Отзывы</p>
              </div>
              <div class="icon">

              </div>
              <a href="{{route('review.index')}}" class="small-box-footer">Смотреть больше <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"><small>Количество постов</small>
                <h3>{{$washing_programs_count}}</h3>
                    
                <p>Таблица: Программа мойки</p>
              </div>
              <div class="icon">
              
              </div>
              <a href="#" class="small-box-footer">Смотреть больше <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>
        <!-- /.row -->
        <!-- Main row -->
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
@endsection

