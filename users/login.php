<?php
queue_js_file('login');
$pageTitle = __('Log In');
echo head(array('bodyclass' => 'login', 'title' => $pageTitle), $header);
?>

<div class="min-h-[500px] h-[calc(100vh-6rem-17rem)] flex items-center justify-center">
    <div class="max-w-[384px] lg:w-[384px]">
        <h1 class="text-3xl font-bold text-center mb-10">로그인</h1>

        <!--<p id="login-links">&nbsp;</p>-->

        <?php echo flash(); ?>
            
        <?php echo $this->form->setAction($this->url('users/login')); ?>

        <div class="text-sm text-center mt-8">
            <span>회원이 아니신가요?</span>
            <a class="text-primary" href="<?php echo html_escape(url('guest-user/user/register')); ?>">회원가입하기</a>
        </div>
    </div>
</div>
<style>
    #login-form .field{
        margin-bottom:18px;
    }
    #login-form .field label{
        font-size:14px;
        color:#000;
        display:block;
        margin-bottom:4px;
    }
    #login-form .field input[type=text],
    #login-form .field input[type=password]{
        border:none;
        background-color:#F5F5F5;
        width:100%;
        height:52px;
    }
    #login-form .field:nth-of-type(3){
        display:flex;
        flex-direction: row-reverse;
        justify-content: start;
    }
    #login-form .field:nth-of-type(3) #remember-label{
        padding-top:2px;
        margin-left:8px;
    }
    #login-form fieldset + div{
        text-align:center;
    }
    #login-form fieldset + div input{
        font-size:16px;
        color:#fff;
        background-color:#8C48C0;
        padding:14px 28px;
        cursor: pointer;
    }
    #login-form fieldset + div input:hover{
        background-color:#000;
    }
</style>


<?php echo foot(array(), $footer); ?>
