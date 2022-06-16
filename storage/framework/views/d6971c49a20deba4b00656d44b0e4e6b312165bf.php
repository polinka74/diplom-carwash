



<?php $__env->startSection('title', 'Добавить товар'); ?>

<?php $__env->startSection('content'); ?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавление товара</h1>
          </div><!-- /.col -->
    
        </div><!-- /.row -->
        <?php if(session('success')): ?>
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hiden="true">x
            </button>
            <h4><i class="icon fa fa-check"></i><?php echo e(session('success')); ?></h4>
        </div>
        <?php endif; ?>
      </div><!-- /.container-fluid -->
</div>
<div class="col-lg-12">
<div class="card card-primary">
              <form action="<?php echo e(route('goods.store')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="text" name="image" class="form-control" id="exampleInputEmail1" placeholder="Введите путь картинки" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text"  name="title" class="form-control" id="exampleInputPassword1" placeholder="Введите название товара" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Введите цену" required>
                  </div>
                     <div class="form-group">
                    <label for="exampleInputPassword1">descript</label>
                    <input type="text" name="descript" class="form-control" id="exampleInputPassword1" placeholder="Введите сокращенное описание" required>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Введите полное описание" required>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">characteristics</label>
                    <input type="text" name="characteristics" class="form-control" id="exampleInputPassword1" placeholder="Введите характеристики" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
              </form>
            </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p/polinawz/polinawz.beget.tech/public_html/resources/views/admin/goods/create.blade.php ENDPATH**/ ?>