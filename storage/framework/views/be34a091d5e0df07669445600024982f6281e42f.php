<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style> 
    <div class="container" style="padding: 30px 0;">
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                All Orders
            </div>
            <div class="panel-body">
                <?php if(Session::has('order_message')): ?>
                <div class="alert alert-success" role="alert"><?php echo e(Session::get('order_message')); ?></div>
                <?php endif; ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Commande Id</th>
                            <th>Total</th>
                            <th>Reduction</th>
                            <th>Tax</th>
                            <th>Total</th>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Zipcode</th>
                            <th>Status</th>
                            <th>Date de commande</th>
                            <th colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($order->id); ?></td>
                                <td>$<?php echo e($order->subtotal); ?></td>
                                <td>$<?php echo e($order->discount); ?></td>
                                <td>$<?php echo e($order->tax); ?></td>
                                <td>$<?php echo e($order->total); ?></td>
                                <td><?php echo e($order->firstname); ?></td>
                                <td><?php echo e($order->lastname); ?></td>
                                <td><?php echo e($order->mobile); ?></td>
                                <td><?php echo e($order->email); ?></td>
                                <td><?php echo e($order->zipcode); ?></td>
                                <td><?php echo e($order->status); ?></td>
                                <td><?php echo e($order->created_at); ?></td>
                                <td><a href="<?php echo e(route('admin.orderdetails',['order_id'=>$order->id])); ?>" class= "btn btn-info btn-sm">Details</a></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-success btn-sm dropdown-toggle"  type="button" data-toggle="dropdown">Status
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                        <li><a href="#" wire:click.prevent="updateOrderStatus(<?php echo e($order->id); ?>,'delivered')">Livré</a></li>
                                        <li><a href="#" wire:click.prevent="updateOrderStatus(<?php echo e($order->id); ?>,'canceled')">Annulé</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($orders->links()); ?>

            </div>
        </div>
    </div>
</div>
    </div>
</div>
<?php /**PATH /home/bachir/laravel8ecommerce/resources/views/livewire/admin/admin-order-component.blade.php ENDPATH**/ ?>