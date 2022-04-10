<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
         
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=base_url()?>/assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?=base_url()?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>/assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="<?=base_url()?>/assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="authentication-bg">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="">
                                    <span><img src="<?=base_url()?>/assets/images/logo.png" alt="" height="18"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold"> <?=$custom["title"]?> </h4>
                                    <p class="text-muted mb-4"> <?=$custom["text"]?> </p>
                                </div>

                              <!-- formulario aqui :v -->
                               <?php $this->load->view($custom["form"]); ?>
                              
                              
                              
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                       
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page --> 

        <!-- bundle -->
        <script src="<?=base_url()?>/assets/js/vendor.min.js"></script>
        <script src="<?=base_url()?>/assets/js/app.min.js"></script>
      
     
         <script>
      

         function login(){
         
            Swal.fire({
  title: 'Comprobando credenciale!',
  html: 'Por favor espere...',
  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    
    timerInterval = setInterval(() => {
 
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
}) 
    
                jQuery.ajax({
                    type: "POST",
                    data: $("#login_form").serialize(),
                    url: "Login/start",
                    success: function (response) {  
                    console.log(response);                     
                        if (response.trim() == "true") {
                            

                             window.location.href = "Operation/Reception";
                        } else {                            
 Swal.fire({
        icon: 'error',
        title: 'Error al autenticar'
         
      });                        }
                    }
                });
            };     

 


</script>
<script>


             function add_user() {
   jQuery.ajax({
                    type: "POST",
                    data: $("#add_user_form").serialize(),
                    url: "Register/start",
                    success: function (response) {  
                    console.log(response);                     
                       if (response.trim() == "true"){
 Swal.fire({
        icon: 'success',
        title: 'Perfecto, registro exitoso'
         
      }); 

                             window.location.href = "register";
                        }else {                            
 Swal.fire({
        icon: 'error',
        title: 'Error al registar, compruebe que los campos esten correctos'
         
      });                        }
                    }
                });
            };       


</script>
            
           
        
      


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- END: Template JS-->  
    </body>
    <!-- END: Body-->
</html>
