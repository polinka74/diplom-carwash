



<?php $__env->startSection('title', 'Все товары'); ?>

<?php $__env->startSection('content'); ?>

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
                  <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td>
                          <?php echo e($price->id); ?>

                      </td>
                      <td>
                          <a>
                          <?php echo e($price->name); ?>

                          </a>
                      </td>
                      <td>
                          <?php echo e($price->time); ?>

                      </td>
                      <td>
                        <p> <?php echo e($price->service_price); ?></p>
                      </td>
                      <td class="project-actions text-right">
                       
                          <a class="btn btn-info btn-sm" href="#">
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
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServer\domains\carwash\resources\views/admin/price/index.blade.php ENDPATH**/ ?>