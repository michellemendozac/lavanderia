<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Register - Sign Up | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="authentication-bg">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <!-- Logo-->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="assets/images/logo.png" alt="" height="18"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Free Sign Up</h4>
                                    <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
                                </div>

                               <div class="signup-form">
<h2>Register</h2>
<p class="hint-text">Create your account. It's free and only takes a minute.</p>
 
 
<?php echo form_open('Signup',['name'=>'userregistration','autocomplete'=>'off']);?>
<div class="form-group">
<!--success message -->
<?php if($this->session->flashdata('success')){?>
<p style="color:green"><?php  echo $this->session->flashdata('success');?></p>	
<?php } ?>
 
<!--error message -->
<?php if($this->session->flashdata('error')){?>
<p style="color:red"><?php  echo $this->session->flashdata('error');?></p>	
<?php } ?>
 
 
<div class="row">
<div class="col">
<?php echo form_input(['name'=>'firstname','class'=>'form-control','value'=>set_value('firstname'),'placeholder'=>'Enter First Name']);?>
<?php echo form_error('firstname',"<div style='color:red'>","</div>");?>
 
</div>
<div class="col">
<?php echo form_input(['name'=>'lastname','class'=>'form-control','value'=>set_value('lastname'),'placeholder'=>'Enter Last Name']);?>
<?php echo form_error('lastname',"<div style='color:red'>","</div>");?>
 
</div>
</div>        	
 </div>
        
<div class="form-group">
<?php echo form_input(['name'=>'emailid','class'=>'form-control','value'=>set_value('emailid'),'placeholder'=>'Enter your Email id']);?>
 <?php echo form_error('emailid',"<div style='color:red'>","</div>");?>       	
 </div>
 
<div class="form-group">
<?php echo form_password(['name'=>'password','class'=>'form-control','value'=>set_value('password'),'placeholder'=>'Password']);?>
 <?php echo form_error('password',"<div style='color:red'>","</div>");?>  
 
</div>
<div class="form-group">
<?php echo form_password(['name'=>'confirmpassword','class'=>'form-control','value'=>set_value('confirmpassword'),'placeholder'=>'Password']);?>
 <?php echo form_error('confirmpassword',"<div style='color:red'>","</div>");?>  
</div>        
  
<div class="form-group">
<?php echo form_submit(['name'=>'insert','value'=>'Submit','class'=>'btn btn-success btn-lg btn-block']);?>
        </div>
    </form>
    <?php echo form_close();?>
	<div class="text-center">Already have an account? <a href="<?php echo site_url('Signin');?>">Sign in</a></div>
</div>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have account? <a href="pages-login.html" class="text-muted ml-1"><b>Log In</b></a></p>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2018 - 2019 © Hyper - Coderthemes.com
        </footer>

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>
