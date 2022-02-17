<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <?php if(Session::has('order_message')): ?>
                <div class="alert alert-success" role="alert"><?php echo e(Session::get('order_message')); ?></div>
                <?php endif; ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                        <div class="col-md-6">
                        Details Commandes
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo e(route('user.orders')); ?>" class="btn btn-success pull-right">Mes Commandes</a>
                        <?php if($order->status=='ordered'): ?>
                        <a href="#" wire:click.prevent="cancelOrder" class="btn btn-warning pull-right">Annuler Commande</a>
                        <?php endif; ?>
                    </div>
                </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <th>Commande Id</th>
                            <td><?php echo e($order->id); ?></td>
                            <th> Date de commande</th>
                            <td><?php echo e($order->created_at); ?></td>
                            <th>Status</th>
                            <td><?php echo e($order->status); ?></td>
                            <?php if($order->status=='delivered'): ?>
                            <th>Date de livraison</th>
                            <td><?php echo e($order->delivered_date); ?></td>
                            <?php elseif($order->status=='canceled'): ?>
                            <th>Date d'annulation</th>
                            <td><?php echo e($order->canceled_date); ?></td>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class=" panel panel-default">
                    <div class="panel-heading">
                       Produits commandés
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">
                            
                            <h3 class="box-title">Nom des produits</h3>
                            <ul class="products-cart">
                                <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="pr-cart-item">
                                    <div class="product-image">
                                        <figure><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($item->product->image); ?>" alt="<?php echo e($item->product->name); ?>"></figure>
                                    </div>
                                    <div class="product-name">
                                        <a class="link-to-product" href="<?php echo e(route('product.details', ['slug'=>$item->product->slug])); ?>"><?php echo e($item->product->name); ?></a>
                                    </div>
                                    <div class="price-field produtc-price"><p class="price">$<?php echo e($item->product->regular_price); ?></p></div>
                                    <div class="quantity">
                                       <h5><?php echo e($item->quantity); ?></h5>
                                    </div>
                                    <div class="price-field sub-total"><p class="price">$<?php echo e($item->price*$item->quantity); ?></p></div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                            </ul>
                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">Recapitulatif Commande</h4>
                                <p class="summary-info"><span class="title">Total</span><b class="index">$<?php echo e($order->subtotal); ?></b></p>
                                <p class="summary-info"><span class="title">Tax</span><b class="index">$<?php echo e($order->tax); ?></b></p>
                                <p class="summary-info"><span class="title">Livraison</span><b class="index">Livraison gratuite</b></p>
                                <p class="summary-info"><span class="title">Total</span><b class="index">$<?php echo e($order->total); ?></b></p>
    
    
    
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    
    
        <div class="row">
            <div class="col-md-12">
                <div class=" panel panel-default">
                    <div class="panel-heading">
                        Details Facturation
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Prenom</th>
                                <td><?php echo e($order->firstname); ?></td>
                                <th>Nom</th>
                                <td><?php echo e($order->lastname); ?></td>
                            </tr>
                            
                            <tr>
                                <th>Telephone</th>
                                <td><?php echo e($order->mobile); ?></td>
                                <th>Email</th>
                                <td><?php echo e($order->email); ?></td>
                            </tr>
    
                            <tr>
                                <th>Ligne1</th>
                                <td><?php echo e($order->line1); ?></td>
                                <th>Ligne2</th>
                                <td><?php echo e($order->line2); ?></td>
                            </tr>
    
                            <tr>
                                <th>Ville</th>
                                <td><?php echo e($order->City); ?></td>
                                <th>Province</th>
                                <td><?php echo e($order->province); ?></td>
                            </tr>
    
                            <tr>
                                <th>Pays</th>
                                <td><?php echo e($order->country); ?></td>
                                <th>Zipcode</th>
                                <td><?php echo e($order->zipcode); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php if($order->is_shipping_different): ?>
        <div class="row">
            <div class="col-md-12">
                <div class=" panel panel-default">
                    <div class="panel-heading">
                       Details livraison
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Prenom</th>
                                <td><?php echo e($order->shipping->firstname); ?></td>
                                <th>Nom</th>
                                <td><?php echo e($order->shipping->lastname); ?></td>
                            </tr>
                            
                            <tr>
                                <th>Telephone</th>
                                <td><?php echo e($order->shipping->mobile); ?></td>
                                <th>Email</th>
                                <td><?php echo e($order->shipping->email); ?></td>
                            </tr>
    
                            <tr>
                                <th>Ligne1</th>
                                <td><?php echo e($order->shipping->line1); ?></td>
                                <th>Ligne2</th>
                                <td><?php echo e($order->shipping->line2); ?></td>
                            </tr>
    
                            <tr>
                                <th>Ville</th>
                                <td><?php echo e($order->shipping->City); ?></td>
                                <th>Province</th>
                                <td><?php echo e($order->shipping->province); ?></td>
                            </tr>
    
                            <tr>
                                <th>Pays</th>
                                <td><?php echo e($order->shipping->country); ?></td>
                                <th>Zipcode</th>
                                <td><?php echo e($order->shipping->zipcode); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class=" panel panel-default">
                    <div class="panel-heading">
                        Transaction
                    </div>
                    <div class="panel-body">
                       <table class="table">
                           <tr>
                               <th> Mode de Transaction</th>
                               <td><?php echo e($order->transaction->mode); ?></td>
                           </tr>
    
                           <tr>
                            <th>Status</th>
                            <td><?php echo e($order->transaction->status); ?></td>
                        </tr>
    
                        <tr>
                            <th>Date de Transaction</th>
                            <td><?php echo e($order->transaction->created_at); ?></td>
                        </tr>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php /**PATH /home/bachir/laravel8ecommerce/resources/views/livewire/user/user-order-details-component.blade.php ENDPATH**/ ?>