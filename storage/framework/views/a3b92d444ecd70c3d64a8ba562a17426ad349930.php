


<?php $__env->startSection('title','Прайс'); ?>
<?php $__env->startSection('content'); ?>



<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="text-uppercase p-4 mt-4 text-dark">Функции мойки</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-2 ">

            <div class="bt-pricing">
                <ul>
                    <li class="price">
                        <sup><?php echo e($price->service_price); ?></sup>
                        <p><?php echo e($price->time); ?></p>
                    </li>
                    <li class="title-text bg-secondary"><?php echo e($price->name); ?>

                    </li>
                </ul>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div><!-- ./row -->
</div><!-- ./container -->


<div class="fact5 bg-dark p-4">
    <div class="d-flex align-items-center justify-content-center text-center">
        <div class="mx-sm-5 px-5" style="max-width: 900px;">
            <h4 class="display-6 text-white text-uppercase slideInDown">Товары, которые можете преобрести у
                Администратора</h4>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">

        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $goods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $good): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="bt-pricing bg-white">
                        <ul class="">
                            <div class="effects">
                            <img src="<?php echo e($good->image); ?>" class="card-img-top" alt="...">
                                <div>
                                <a href="/<?php echo e($good->id); ?>" class="kartinka"><i class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                            <!-- <a href="/<?php echo e($good->id); ?>" class="kartinka">
                                
                                <div>
                                    
                                </div>
                            </a> -->

                            <li class="price ">

                                <sup><?php echo e($good->price); ?></sup>
                            </li>
                            <li class="title-text bg-secondary"><?php echo e($good->title); ?>

                            </li>

                        </ul>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p/polinawz/polinawz.beget.tech/public_html/resources/views/price.blade.php ENDPATH**/ ?>