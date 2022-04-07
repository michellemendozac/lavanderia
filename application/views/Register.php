 

<body>
 <div class="container"> 
 <br><br>
         <div class="account-pages mb-16">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="assets/images/logo.png" alt="" height="18"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Registro de personal</h4>
                                    <p class="text-muted mb-4"></p>
                                </div>

   <div class="panel-body">
    <form method="post" action="<?php echo base_url(); ?>/register/validation">
     <div class="form-group">
      <label>Nombre completo</label>
      <input type="text" name="user_name"placeholder="nombre completo" required   class="form-control" value="" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Correo electronico</label>
      <input type="text" name="user_email" placeholder="correo electronico" required class="form-control" value="" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>
     <div class="form-group">
      <label>Contraseña</label>
      <input type="password" name="user_password" placeholder="contraseña" required  class="form-control" value="" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>
     </div>
     <div class="form-group">
          <button class="btn btn-primary" type="submit"> Sign Up </button> 
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>

