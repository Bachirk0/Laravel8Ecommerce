<div>
<div class="container" style="padding: 30px 0;">
  <div class="row">
      <div class="col-md-12">
        <div id="review_form_wrapper">
            <div id="comments">
                <h2 class="woocommerce-Reviews-title">Ajouter un commentaire</h2>
                <ol class="commentlist">
                    <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                        <div id="comment-20" class="comment_container"> 
                            <img alt="" src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($orderItem->product->image); ?>" height="80" width="80">
                            <div class="comment-text">
                                <p class="meta"> 
                                    <strong class="woocommerce-review__author"><?php echo e($orderItem->product->name); ?></strong> 
                                </p>
                            </div>
                        </div>
                    </li>
                </ol>
            </div><!-- #comments -->
            <div id="review_form">
                <?php if(Session::has('message')): ?>
                <p class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></p>
                <?php endif; ?>
                <div id="respond" class="comment-respond"> 

                    <form  wire:submit.prevent="addReview" id="commentform" class="comment-form" novalidate="">
                       
                        <div class="comment-form-rating">
                            <span>Votre note</span>
                            <p class="stars">
                                
                                <label for="rated-1"></label>
                                <input type="radio" id="rated-1" name="rating" value="1" wire:model="rating">
                                <label for="rated-2"></label>
                                <input type="radio" id="rated-2" name="rating" value="2" wire:model="rating">
                                <label for="rated-3"></label>
                                <input type="radio" id="rated-3" name="rating" value="3" wire:model="rating">
                                <label for="rated-4"></label>
                                <input type="radio" id="rated-4" name="rating" value="4" wire:model="rating">
                                <label for="rated-5"></label>
                                <input type="radio" id="rated-5" name="rating" value="5" checked="checked" wire:model="rating">
                                <?php $__errorArgs = ['rating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </p>
                        </div>
                        <p class="comment-form-comment">
                            <label for="comment">Your review <span class="required">*</span>
                            </label>
                            <textarea id="comment" name="comment" cols="45" rows="8" wire:model="comment"></textarea>
                            <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </p>
                        <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                        </p>
                    </form>

                </div><!-- .comment-respond-->
            </div><!-- #review_form -->
        </div><!-- #review_form_wrapper -->
      </div>
  </div>
</div>
</div>
<?php /**PATH /home/bachir/laravel8ecommerce/resources/views/livewire/user/user-review-component.blade.php ENDPATH**/ ?>