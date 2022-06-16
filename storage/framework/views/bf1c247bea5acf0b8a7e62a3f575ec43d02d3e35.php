
<?php $__env->startSection('title', 'Главная'); ?>
<?php $__env->startSection('content'); ?>
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
                <h3><?php echo e($goods_count); ?></h3>

                <p>Таблица: Товары</p>
              </div>
              <div class="icon">
               
              </div>
              <a href="<?php echo e(route('goods.index')); ?>" class="small-box-footer">Смотреть больше <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner"><small>Количество постов</small>
                <h3><?php echo e($gallery_count); ?></h3>

                <p>Таблица: Галерея</p>
              </div>
              <div class="icon">
             
              </div>
              <a href="<?php echo e(route('gallery.index')); ?>" class="small-box-footer">Смотреть больше <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner"><small>Количество постов</small>
                <h3><?php echo e($equipments_count); ?></h3>

                <p>Таблица: Оборудование</p>
              </div>
              <div class="icon">
               
              </div>
              <a href="<?php echo e(route('equipment.index')); ?>" class="small-box-footer">Смотреть больше <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner"><small>Количество постов</small>
                <h3><?php echo e($prices_count); ?></h3>

                <p>Таблица: Цены</p>
              </div>
              <div class="icon">

              </div>
              <a href="<?php echo e(route('prices.index')); ?>" class="small-box-footer">Смотреть больше <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner"><small>Количество постов</small>
                <h3><?php echo e($reviews_count); ?></h3>

                <p>Таблица: Отзывы</p>
              </div>
              <div class="icon">

              </div>
              <a href="<?php echo e(route('review.index')); ?>" class="small-box-footer">Смотреть больше <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"><small>Количество постов</small>
                <h3><?php echo e($washing_programs_count); ?></h3>
                    
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p/polinawz/polinawz.beget.tech/public_html/resources/views/admin/main.blade.php ENDPATH**/ ?>