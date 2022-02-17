<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class=" panel panel-default">
                  <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6">
                              Add New Coupon
                          </div>
                          <div class="col-md-6">
                              <a href="<?php echo e(route('admin.coupons')); ?>" class ="btn btn-success pull-right">All Coupon</a>
                          </div>
                      </div>
                  </div>
                  <div class="panel-body">
                      <?php if(Session::has('message')): ?> 
                      <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                          <?php endif; ?>
                      <form class="form-horizontal" wire:submit.prevent="storeCoupon"> 
                          <div class="form-group">
                              <label class="col-md-4 control-label"> Coupon Code</label>
                          <div class="col-md-4">
                          <input type="text" placeholder="Coupon code" class="form-control input-md"wire:model="code" />
                          <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"> Coupon Type</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="type">
                                    <option value="">Select</option>
                                    <option value="fixed">fixed</option>
                                    <option value="percent">Percent</option>
                                </select>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                              </div>
    
                            <div class="form-group">
                              <label class="col-md-4 control-label">Coupon Value </label>
                          <div class="col-md-4">
                          <input type="text" placeholder="Coupon Value" class="form-control input-md" wire:model="value"/>
                          <?php $__errorArgs = ['value'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Cart Value </label>
                            <div class="col-md-4">
                            <input type="text" placeholder="Cart Value" class="form-control input-md" wire:model="cart_value"/>
                            <?php $__errorArgs = ['cart_value'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                              </div>


                              <div class="form-group">
                                <label class="col-md-4 control-label">Expiry Date </label>
                            <div class="col-md-4" wire:ignore>
                            <input type="expiry_date" id="expiry-date" placeholder="Expiry Date" class="form-control input-md" wire:model="expiry_date"/>
                            <?php $__errorArgs = [''];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                              </div>
    
                            <div class="form-group">
                              <label class="col-md-4 control-label"></label>
                          <div class="col-md-4">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                            </div>
                     </form>
                      </div>
                  </div>
              </div>
        </div>
        </div>                
    
    </div>
    </div>          
    
    <?php $__env->startPush('scripts'); ?>
        <script>
            $(function(){
                $('#expiry-date').datetimepicker({
                    format: 'Y-MM-DD'
                })
                 .on('dp.change', function(ev){
                     var data= $('#expiry-date').val();
                     window.livewire.find('<?php echo e($_instance->id); ?>').set('expiry_date',data);
                 });
            });
        </script>
    <?php $__env->stopPush(); ?>
    <?php /**PATH /home/bachir/laravel8ecommerce/resources/views/livewire/admin/admin-add-coupon-component.blade.php ENDPATH**/ ?>