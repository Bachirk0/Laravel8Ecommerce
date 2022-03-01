<div>
   <div class="container" style="padding: 30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       Changer de Mot de Passe
                   </div>
                   <div class="panel-body">
                       <?php if(Session::has('password_success')): ?>
                       <div class="alert alert-success" role="alert"><?php echo e(Session::get('password_success')); ?></div>
                       <?php endif; ?>

                       <?php if(Session::has('password_error')): ?>
                       <div class="alert alert-danger" role="alert"><?php echo e(Session::get('password_error')); ?></div>
                       <?php endif; ?>

                       <form class="form-horizontal" wire:submit.prevent="changePassword">
                           <div class="form-group">
                               <label class="col-md-4 control-label">Mot de Passe actuel </label>
                               <div class="col-md-4">
                                   <input type="password" placeholder="Mot de passe actuel" class="form-control input-md" name="current_password" wire:model="current_password" />
                                   <?php $__errorArgs = ['current_password'];
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
                            <label class="col-md-4 control-label">Nouveau Mot de Passe </label>
                            <div class="col-md-4">
                                <input type="password" placeholder="Nouveau Mot de passe" class="form-control input-md" name="password" wire:model="password" />
                                <?php $__errorArgs = ['password'];
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
                            <label class="col-md-4 control-label">Confirmer le Mot de Passe</label>
                            <div class="col-md-4">
                                <input type="password" placeholder="Confirmer le Mot de passe " class="form-control input-md" name="password_confirmation" wire:model="password_confirmation" />
                                <?php $__errorArgs = ['password_confirmation'];
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
                                <button type="submit" class="btn btn-primary">Soumettre</button>
                            </div>
                        </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
<?php /**PATH /home/bachir/laravel8ecommerce/resources/views/livewire/user/user-change-password-component.blade.php ENDPATH**/ ?>