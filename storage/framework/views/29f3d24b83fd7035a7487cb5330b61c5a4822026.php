<div>
      <div class="container" style="padding: 30px 0;">
      <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mise en vente
                </div>
                <div class="panel-body">
                    <?php if(Session::has('message')): ?>
                    <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                    <?php endif; ?>
                    <form class="form-horizontal" wire:submit.prevent="updateSale">
                         <div class="form-group">
                             <label class="col-md-4 control-label">Status</label>
                             <div class="col-md-4">
                                 <select class="form-control" wire:model="status">
                                     <option value="0">Inactive</option>
                                     <option value="1">Active</option>
                                 </select>
                             </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Date de vente</label>
                            <div class="col-md-4">
                                <input type="text" id="sale-date" placeholder="YYYY/MM/DD  H:M:S" class="form-control input-md" wire:model="sale_date"/>
                                
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
            $('#sale-date').datetimepicker(
                {
                    format : 'Y-MM-DD h:m:s',
                })
            .on('dp.change',function(ev){
               var data = $('#sale-date').val();
               window.livewire.find('<?php echo e($_instance->id); ?>').set('sale_date',data);
            });
        });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH /home/bachir/laravel8ecommerce/resources/views/livewire/admin/admin-sale-component.blade.php ENDPATH**/ ?>