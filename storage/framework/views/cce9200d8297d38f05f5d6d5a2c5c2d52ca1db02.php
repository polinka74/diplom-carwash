



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
                  <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reviews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td>
                          <?php echo e($reviews->id); ?>

                      </td>
                      <td>
                          <a>
                          <?php echo e($reviews->name); ?>

                          </a>
                      </td>
                      <td>
                          <a>
                          <?php echo e($reviews->message); ?>

                          </a>
                      </td>
                      <td>
                          <a>
                          <?php echo e($reviews->vivod); ?>

                          </a>
                      </td>
                      <td class="project-actions text-right">
                       
                         <a class="btn btn-info btn-sm" href="<?php echo e(route('review.edit', $reviews->id)); ?>">
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
<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p/polinawz/polinawz.beget.tech/public_html/resources/views/admin/review/index.blade.php ENDPATH**/ ?>