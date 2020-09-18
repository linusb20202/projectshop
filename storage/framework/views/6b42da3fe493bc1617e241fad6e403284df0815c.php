<?php $__env->startSection('content'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $("#loginform").validate();        
        $(".enterkey").keyup(function(e) {
            if(e.which == 13) {
                postform();
            }
        });
        $("#user_password").keyup(function(e) {
            if(e.which == 13) {
                postform();
            }
        });
    });
    
    function postform(){
        if($("#loginform").valid()){
            $('#btnloader').show();
            $("#loginform").submit();
        }
    }
</script>
<div class="detai_page">
      <div class="top_pop"><div class="signn-logo"><a href="<?php echo HTTP_PATH; ?>"><?php echo e(HTML::image(LOGO_PATH, SITE_TITLE)); ?></a></div></div>
    <div class="login-wapper">        
        <div class="login-bg">
            <div class="signn">Log In </div>
            
            <div class="ee er_msg"><?php echo $__env->make('elements.errorSuccessMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>            
            <div normal_login>
                <?php echo e(Form::open(array('method' => 'post', 'id' => 'loginform', 'class' => 'form form-signin'))); ?>             
                <div class="login_fieldarea">
                    <div class="inputt">
                        <span class="fieldd"><i class="fa fa-envelope"></i>
                            <?php echo e(Form::text('email_address', Cookie::get('user_email_address'), ['class'=>'form-control required  enterkey', 'placeholder'=>'Email address / Username', 'autocomplete'=>'OFF'])); ?>

                        </span>
                    </div>
                    <div class="inputt">
                        <span class="fieldd"><i class="fa fa-key"></i>
                            <?php echo e(Form::input('password', 'password', Cookie::get('user_password'), array('class' => "required form-contro enterkeyl", 'placeholder' => 'Password', 'id'=>'user_password'))); ?>

                        </span>
                    </div>
                    <div class="clear"></div>            
                    <div class="inputt inputt_rev">                    
                        <div class="col_tow_logns remember_secsd">
                            <?php echo e(Form::checkbox('user_remember', '1', Cookie::get('user_remember'))); ?>

                            <label for="remember_sec"><span></span>Remember Me</label>
                        </div>
                        <div class="col_tow_logns forgot_pass_sec">
                            <a href="<?php echo e(URL::to( 'forgot-password')); ?>"></i>Forgot your Password?</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="sign_in" id="sub_btn_dive">
                        <button id="ddbuton" type="button" class="btn btn-primary loginbtn" onclick="postform()">Log In</button>
                        <div class="loginbtnloader" id="btnloader"><img src="<?php echo e(asset('public/img/loading.gif')); ?>" /></div>
                    </div>
                </div>
                <div class="sign_center ">
                    <div class="always_btn"> Don't have an account? <a href="<?php echo e(URL::to( 'register')); ?>"></i>Sign Up</a></div> 
                </div>
                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/seenshop/laravel.seenshop.com/resources/views/users/login.blade.php ENDPATH**/ ?>