



<?php $__env->startSection('title', 'Все фото'); ?>

<?php $__env->startSection('content'); ?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Все фото</h1>
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
                          image 1
                      </th>
                      <th style="width: 20%">
                          image 2
                      </th>
                      <th style="width: 20%">
                          image 3
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td>
                          <?php echo e($gallery->id); ?>

                      </td>
                      <td>
                      <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img  class="w-100" src="/<?php echo e($gallery->image_1); ?>">
                              </li>
                          </ul>
                      </td>
                      <td>
                      <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img  class="w-100" src="/<?php echo e($gallery->image_2); ?>">
                              </li>
                          </ul>
                      </td>
                      <td>
                      <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img  class="w-100" src="/<?php echo e($gallery->image_3); ?>">
                              </li>
                          </ul>
                      </td>
                               <td class="project-actions text-right">
                       
                          <a class="btn btn-info btn-sm" href="<?php echo e(route('gallery.edit', $gallery->id)); ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редактировать
                          </a>
                     <!--      <form action="<?php echo e(route('gallery.destroy', $gallery->id)); ?>" method="post" style="display: inline-block">
                         <?php echo csrf_field(); ?>
                         <?php echo method_field('DELETE'); ?>
                          <button type="submit" class="btn btn-danger btn-sm delete-btn">
                         <i class="fas fa-trash">
                         </i>
                         Удалить
                     </button>
                     </form> -->
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
<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p/polinawz/polinawz.beget.tech/public_html/resources/views/admin/gallery/index.blade.php ENDPATH**/ ?>