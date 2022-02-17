<div>
    <div class="container" style="padding: 30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <div class="row">
                       <div class="col-md-6">
                         Edit product
                       </div>
                       <div class="col-md-6"> 
                           <a href="<?php echo e(route('admin.products')); ?>" class="btn btn-success pull-right">All Products</a>
                       </div>
                       </div>
                   </div>
                   <div class="panel-body">
                       <?php if(Session::has('message')): ?>
                       <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                       <?php endif; ?>
                       <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                           <div class="form-group">
                               <label class="col-md-4 control-label">Product Name</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug" />
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
                               <label class="col-md-4 control-label">Product Slug</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug"/>
                                   <?php $__errorArgs = ['slug'];
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
                               <label class="col-md-4 control-label">Short Description</label>
                               <div class="col-md-4"wire:ignore>
                                   <textarea class="form-control" id="short_description" placeholder="Short description" wire:model="short_description"></textarea>
                                   <?php $__errorArgs = ['short_description'];
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
                               <label class="col-md-4 control-label">Description</label>
                               <div class="col-md-4" wire:ignore>
                                   <textarea class="form-control" id="description" placeholder="Description" wire:model="description"></textarea>
                                   <?php $__errorArgs = ['description'];
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
                               <label class="col-md-4 control-label">Regular price</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Regular price" class="form-control input-md" wire:model="regular_price"/>
                                   <?php $__errorArgs = ['regular_price'];
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
                               <label class="col-md-4 control-label">Sale Price</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Sale price" class="form-control input-md" wire:model="sale_price"/>
                                   <?php $__errorArgs = ['sale_price'];
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
                               <label class="col-md-4 control-label">SKU</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU"/>
                                   <?php $__errorArgs = ['SKU'];
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
                               <label class="col-md-4 control-label">Stock</label>
                               <div class="col-md-4">
                                   <select class="form-control" wire:model="stock_status">
                                       <option value="instock">In Stock</option>
                                       <option value="outofstock">Out of Stock</option>

                                   </select>
                                   <?php $__errorArgs = ['stock_status'];
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
                               <label class="col-md-4 control-label">Featured</label>
                               <div class="col-md-4">
                                   <select class="form-control" wire:model="featured">
                                       <option value="0">No</option>
                                       <option value="1">Yes</option>
                                   </select>
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="col-md-4 control-label">Quantity</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity"/>
                                   <?php $__errorArgs = ['quantity'];
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
                               <label class="col-md-4 control-label" >Product image</label>
                               <div class="col-md-4">
                                   <input type="file"  class="input-file"wire:model="newimage"/>
                                   <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   <?php if($newimage): ?>
                                   <img src="<?php echo e($newimage->temporaryUrl()); ?>" width="120"/>
                                   <?php else: ?>
                                   <img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($image); ?>" width="120"/>

                                   <?php endif; ?>
                               </div>
                           </div>


                           <div class="form-group">
                               <label class="col-md-4 control-label">Category</label>
                               <div class="col-md-4">
                                   <select class="form-control" wire:model="category_id">
                                       <option value="">Select Category</option>
                                       <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </select>
                               </div>
                           </div>
                           

                           <div class="form-group">
                               <label class="col-md-4 control-label"></label>
                               <div class="col-md-4">
                                   <button type="submit" class="btn btn-primary">Update</button>
                               </div>
                           </div>

                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
    <script>
        $(function(){
            tinymce.init({
                selector:'#short_description',
                setup:function(editor)
                {
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var $d_data =$('#short_description').val();
                        window.livewire.find('<?php echo e($_instance->id); ?>').set('short_description', $d_data);
                    });
                }
            });

            tinymce.init({
                selector:'#description',
                setup:function(editor)
                {
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var d_data =$('#description').val();
                        window.livewire.find('<?php echo e($_instance->id); ?>').set('description', d_data);
                    });
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH /home/bachir/laravel8ecommerce/resources/views/livewire/admin/admin-edit-product-component.blade.php ENDPATH**/ ?>