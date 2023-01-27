  <footer class="main-footer" style="position: fixed; bottom: 0; width:100%;">
      <div class="d-none d-sm-block">
        <div class="container">
          <div class="row">
           <div class="col-md-4"></div>
            <div class="col-md-8">
              <a href="home" class="btn b1footer"style="font-size: 30px;width: 100px;  ">
                <i class="fa fa-home"style="color:#18345D"></i> 
              </a>
              <a href="assistance" class="btn b1footer" style="font-size: 20px;width: 100px; " >
                <i class="fas fa-question" style="font-size:30px;color:#18345D"></i> 
              </a>
              <!-- <a href="" class="btn " style="font-size: 30px; width: 150px;">
                <i class="far fa-bell" style="color:#18345D"></i>
                <span class="badge badge-warning navbar-badge">15</span> 
              </a> -->
             
              <a href="messagerie-client" class="btn b1footer"style="font-size: 30px; width: 100px; ;">
                <i class="far fa-comments" style="color:#18345D"></i>
                <span class="badge badge-danger navbar-badge">3</span>
              </a>
            </div>
          </div>
        </div>
      </div>
  </footer>

</div>
<script type="text/javascript">
  $(document).ready(() => {
  const _currentUser = window.localStorage.getItem("_currentUser")
  if(_currentUser){
    let _ = JSON.parse(_currentUser); _ = _ && _['user'];
    console.log(_)
    $("#content-name").html(_ && _['email'])
  }else{
    window.location.replace("./login.php")
  }
})
</script>
<!-- ./wrapper -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="./plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="./plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="./plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="./plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="./plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="./plugins/moment/moment.min.js"></script>
<script src="./plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="./plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="./plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="./plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./dist/js/pages/dashboard.js"></script>
</body>
</html>
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="./plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="./plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="./plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="./plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="./plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="./plugins/moment/moment.min.js"></script>
<script src="./plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="./plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="./plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="./plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./dist/js/pages/dashboard.js"></script>
</body>
</html>
