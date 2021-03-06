<?php $__env->startSection('content'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(url(config('app.url'))); ?>/public/css/facebox.css">
<script type="text/javascript" src="<?php echo e(url(config('app.url'))); ?>/public/js/facebox.js"></script>

<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

<script type="text/javascript">
    $(document).ready(function ($) {
    $('.close_image').hide();
            $('a[rel*=facebox]').facebox({
    closeImage: '<?php echo HTTP_PATH; ?>/public/img/close.png'
    });
            $("#message").validate();
            $("#offer").validate();
//        $('#message_part').animate({
//    scrollTop: $('#message_part').offset().top}, 1000);
        //$(document).scrollTop(50);
        $('#message_part').animate({scrollTop: $('#message_part').prop('scrollHeight')});
    });
</script>
<div class="main_dashboard message_dashboard"  id="app">
    <div class="container">
        <div class="message_sections" style="height:600px;">
            
            <div class="row-padding">
                
            <chat-app :user="<?php echo e(auth()->user()); ?>" :receiver="<?php echo e($receiver); ?>"></chat-app>
                    
                
                
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.inner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jaimebalatero/Desktop/prozed/laravelvue/09-14-20/resources/views/messages/message.blade.php ENDPATH**/ ?>