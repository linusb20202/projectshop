<?php $__empty_1 = true; $__currentLoopData = $allrecords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allrecord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <?php if(isset($allrecord->User->slug)): ?>
        <?php echo $__env->make('elements.gigbox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<div class="no_record">No more records found.</div>
<?php endif; ?>
<?php if(!$allrecords->isEmpty() && $allrecords->lastPage() > 1): ?>
<div class="showtotap">
    <div class="shpagel">Showing page <?php echo e($allrecords->currentPage()); ?> of <?php echo e($allrecords->lastPage()); ?> </div>
    <div class="topn_rightd ajaxpagee ddpagingshorting" id="pagingLinks" align="right">
        
        <div class="panel-heading" style="align-items:center;">
            <?php echo e($allrecords->appends(Input::except('_token'))->render()); ?>

        </div>
    </div>
</div>
<?php endif; ?>
<script>
$(document).ready(function () {
    $("img.lazy").lazyload();
    <?php if(isset($isajax)): ?>
    $('html, body').animate({
        scrollTop: $('#backtotop').offset().top - 1
    }, 'slow');
    <?php endif; ?>
});
</script><?php /**PATH /home/seenshop/laravel.seenshop.com/resources/views/elements/gigs/listing.blade.php ENDPATH**/ ?>