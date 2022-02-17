<div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class=" panel panel-default">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-md-6">
                          Modifier Category
                      </div>
                      <div class="col-md-6">
                          <a href="<?php echo e(route('admin.categories')); ?>" class ="btn btn-success pull-right">Toutes les Categories</a>
                      </div>
                  </div>
              </div>
              <div class="panel-body">
                  <?php if(Session::has('message')): ?> 
                  <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                      <?php endif; ?>
                  <form class="form-horizontal" wire:submit.prevent="updateCategory"> 
                      <div class="form-group">
                          <label class="col-md-4 control-label">Nom de la categorie</label>
                      <div class="col-md-4">
                      <input type="text" placeholder="Category Name" class="form-control input-md"wire:model="name" wire:keyup="generateslug"/>
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
                          <label class="col-md-4 control-label">Categorie Slug</label>
                      <div class="col-md-4">
                      <input type="text" placeholder="Category Slug" class="form-control input-md" wire:model="slug"/>
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
                          <label class="col-md-4 control-label"></label>
                      <div class="col-md-4">
                      <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </div>
                        </div>
                 </form>
                  </div>
              </div>
          </div>
    </div>
    </div>                

</div>
</div>                         <?php /**PATH /home/bachir/laravel8ecommerce/resources/views/livewire/admin/admin-edit-category-component.blade.php ENDPATH**/ ?>