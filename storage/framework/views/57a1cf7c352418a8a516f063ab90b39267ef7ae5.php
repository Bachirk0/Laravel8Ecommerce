<div>
        <div class="container" style="padding: 30px 0;">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Slides
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo e(route('admin.addhomeslider')); ?>" class="btn btn-success pull-right">Ajouter un Slide</a>
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
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Sous titre</th>
                                    <th>Prix</th>
                                    <th>Lien</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td><?php echo e($slider->id); ?></td> 
                                    <td><img src="<?php echo e(asset('assets/images/sliders')); ?>/<?php echo e($slider->image); ?>" width="120" /></td> 
                                    <td><?php echo e($slider->title); ?></td> 
                                    <td><?php echo e($slider->subtitle); ?></td> 
                                    <td><?php echo e($slider->price); ?></td> 
                                    <td><?php echo e($slider->link); ?></td>  
                                    <td><?php echo e($slider->status == 1 ? 'Active':'Inactive'); ?></td> 
                                    <td><?php echo e($slider->created_at); ?></td> 
                                    <td>
                                        <a href="<?php echo e(route('admin.edithomeslider', ['slide_id'=>$slider->id])); ?>"><i class="fa fa-edit fa-2x text-info"></i></a>
                                  
                                        <a href="#" style="margin-left:5px" wire:click.prevent="deleteSlide(<?php echo e($slider->id); ?>)"><i class="fa fa-times fa-2x text-danger"></i></a>
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
</div><?php /**PATH /home/bachir/laravel8ecommerce/resources/views/livewire/admin/admin-home-slider-component.blade.php ENDPATH**/ ?>