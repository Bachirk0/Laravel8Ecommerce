<div>
<div class="container" style="padding: 30px 0;">
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Gerer les categories
            </div>
            <div class="panel-body">
                <?php if(Session::has('message')): ?>
                    <div class="aler alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                <?php endif; ?>
                <form class="form-horizontal"wire:submit.prevent="updateHomeCategory">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Choisir les Categories</label>
                           <div class="col-md-4" wire:ignore>
                               <select class="sel_categories form-control" name="categories[]" multiple="multiple" wire:model="selected_categories">
                                   <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </select>
                           </div>
                        </div>
                    

                        <div class="form-group">
                            <label class="col-md-4 control-label">Numero du produit</label>
                               <div class="col-md-4">
                                   <input type="text" class="form-control input-md" wire:model="numberofproducts"/>
                               </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                               <div class="col-md-4">
                                   <button type="submit" class="btn btn-primary">Enregistrer</button>
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
    $(document).ready(function()
    {
        $('.sel_categories').select2();
        $('.sel_categories').on('change', function(e)
        {
            var data= $('.sel_categories').select2("val");
            window.livewire.find('<?php echo e($_instance->id); ?>').set('selected_categories',data);
        });
    });
    </script>
<?php $__env->stopPush(); ?> <?php /**PATH /home/bachir/laravel8ecommerce/resources/views/livewire/admin/admin-home-category-component.blade.php ENDPATH**/ ?>