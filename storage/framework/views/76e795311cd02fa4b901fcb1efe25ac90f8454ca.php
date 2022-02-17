<div>
   
    <div class="container" style="padding:30px 0;"></div>
<div class="row">
<div class="col-md-12">
    <div class="panel panel-default">
<div class="panel-heading">
    <div class="row">
        <div class="col-md-6">
            All Coupon
        </div>
        <div class="col-md-6">
            <a href="<?php echo e(route('admin.addcoupon')); ?>" class="btn btn-success pull-right">Add New</a>
        </div>
    </div>
</div>
<div class="panel-body">
    <?php if(Session::has('message')): ?>
    <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
    <?php endif; ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Coupon Code</th>
                <th>Coupon Type</th>
                <th>Coupon Value</th>
                <th>Cart Value</th>
                <th>Expiry Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($coupon->id); ?></td>
                <td><?php echo e($coupon->code); ?></td>
                <td><?php echo e($coupon->type); ?></td>
                <?php if($coupon->type =='fixed'): ?>
                <td>$<?php echo e($coupon->value); ?></td> 
                <?php else: ?> 
                <td><?php echo e($coupon->value); ?>%</td> 
                <?php endif; ?>
                <td><?php echo e($coupon->cart_value); ?></td>
                <td><?php echo e($coupon->expiry_date); ?></td>
                <td>
                    <a href="<?php echo e(route('admin.editcoupon',  ['coupon_id'=>$coupon->id])); ?>"><i class="fa fa-edit fa-2x"></i></a>
                   <a href="#" onclick="confirm('Are you sure you want to delete this coupon') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCoupon(<?php echo e($coupon->id); ?>)" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
    </div>
<?php /**PATH /home/bachir/laravel8ecommerce/resources/views/livewire/admin/admin-coupons-component.blade.php ENDPATH**/ ?>