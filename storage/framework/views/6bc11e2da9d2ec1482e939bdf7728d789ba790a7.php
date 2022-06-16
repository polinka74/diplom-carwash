



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
       <?php if(session('success')): ?>
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hiden="true">x
            </button>
            <h4><i class="icon fa fa-check"></i><?php echo e(session('success')); ?></h4>
        </div>
        <?php endif; ?>
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
                  <?php $__currentLoopData = $goodss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $good): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td>
                          <?php echo e($good['id']); ?>

                      </td>
                      <td>
                          <a>
                          <?php echo e($good['title']); ?>

                          </a>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="/<?php echo e($good->image); ?>">
                              </li>
                          </ul>
                      </td>
                      <td>
                              <p> <?php echo e($good['price']); ?></p>
                      </td>
                      <td>
                              <p> <?php echo e($good['descript']); ?></p>
                      </td>
                      <td>
                              <p> <?php echo e($good['description']); ?></p>
                      </td>
                       <td>
                              <p> <?php echo e($good['characteristics']); ?></p>
                      </td>
                      <td class="project-actions text-right">
                       
                          <a class="btn btn-info btn-sm" href="<?php echo e(route('goods.edit', $good->id)); ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редактировать
                          </a>
                          
                          <form action="<?php echo e(route('goods.destroy', $good->id)); ?>" method="post" style="display: inline-block">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('DELETE'); ?>
                               <button type="submit" class="btn btn-danger btn-sm delete-btn">
                              <i class="fas fa-trash">
                              </i>
                              Удалить
                          </button>
                          </form>
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
<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p/polinawz/polinawz.beget.tech/public_html/resources/views/admin/goods/index.blade.php ENDPATH**/ ?>