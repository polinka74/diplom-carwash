
<?php $__env->startSection('title','Товар'); ?>

<?php $__env->startSection('content'); ?>

<style>
.tovar_kart {
    display: grid;
    grid-templay-columns: 2fr 2fr;
}

.product-aside__newprice-retail {
    font-size: 32px;
    font-weight: 700;
    line-height: 37px;
    width: 55%;
}

.product-aside__newprice-retail span {
    display: block;
    font-size: 14px;
    font-weight: 400;
    line-height: 16px;
}

.card-body {
    display: grid;
    align-items: center;
    
    
}
.img-fluid{
    border: 1px solid #dee2e6!important;
}
</style>




<input type="button" onclick="history.back();" value="Назад"
    class="m-4 btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block" />
<div class="card mb-3" style=" margin:0 auto; max-width:1200px;">
    <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
        <div class="container">
            <div class="page-breadcrumb d-flex align-items-center">
                <h3 class="breadcrumb-title pe-3"><?php echo e($ProductRow['title']); ?></h3>
                <div class="ms-auto">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/price">Прайс</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e($ProductRow['title']); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?php echo e($ProductRow->image); ?>" class="img-fluid  p-4 m-4" alt="...">
        </div>
        <div class="col-md-7 m-4 ">
            <div class="card-body">
                <h5 class="card-title mt-4"><?php echo e($ProductRow->title); ?></h5><hr>
                <div class="product-aside__newprice-retail text"><?php echo e($ProductRow->price); ?>

                    <span>Ваша цена</span>
                </div><br>
                <h4 class="card-text">О товаре:
                </h4>
                <p><?php echo e($ProductRow->descript); ?></p>
                <hr>
            </div>
        </div>
    </div>
    <section class="py-4">
					<div class="container">
						<div class="product-more-info ">
							<ul class="nav nav-tabs mb-0" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active " data-bs-toggle="tab" href="#discription" role="tab" aria-selected="true">
										<div class="d-flex align-items-center ">
											<div class="tab-title text-uppercase fw-500 ">Описание</div>
										</div>
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" data-bs-toggle="tab" href="#more-info" role="tab" aria-selected="false">
										<div class="d-flex align-items-center">
											<div class="tab-title text-uppercase fw-500">Характеристики</div>
										</div>
									</a>
								</li>
							</ul>
							<div class="tab-content pt-3">
								<div class="tab-pane fade active show" id="discription" role="tabpanel">
									<p><?php echo e($ProductRow->description); ?></p>
								</div>
								<div class="tab-pane fade" id="more-info" role="tabpanel">
									<p><?php echo e($ProductRow->characteristics); ?></p>
								</div>
							</div>
						</div>
					</div>
				</section>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p/polinawz/polinawz.beget.tech/public_html/resources/views/PageProduct.blade.php ENDPATH**/ ?>