<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.js"></script> 
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/bootstrap.bundle.js"></script>
<!-- AdminLTE App -->
<script src="../../src/js/adminlte.min.js"></script>
<!-- JS main -->
<script src="../../src/js/main.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
   //tooltip
   $(function() {
      $('[data-toggle="tooltip"]').tooltip()
   })
</script>
<!-- Poppers -->
<script src="../../plugins/popper/popper.min.js"></script>
<script>
      // ocultar password
      function mostrarPassword() {
      var cambio = document.getElementById("password");
      if (cambio.type == "password") {
         cambio.type = "text";
         $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
      } else {
         cambio.type = "password";
         $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
      }
   }

   $(document).ready(function() {
      //CheckBox mostrar contraseña
      $('#ShowPassword').click(function() {
         $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
      });
   });
</script>
