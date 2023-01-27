<?php include('header.php'); ?>
    <script>
      const getUserDatas = function (e){
        if(!checkCookie('token')){
          window.location.href='login.php' //le cas l'utlisateur nest pas connecte parceque le cookie token est vide
        }
        else{
          const saved_token = getCookie('token')
        const reqHeaders = new Headers();
          reqHeaders.append("Authorization",`Bearer ${saved_token}`) //on ajoute le bearer token pour faire la requete 
          const reqOptions={
            method : 'GET',
            headers : reqHeaders,
          }
          fetch("https://jess-backend.onrender.com/api/v1/auth/users",reqOptions) //renseigne toi sur le lien pour recuperer les informations d'un utlisateur donne par son token
          .then(res=>reponse = res.json())
          .then(result=>{
            // result['name'] = 'Eze Josue Jess' //ligne a supprimer apres comprehension
            // result['email'] = 'ez@gmail.com' //ligne a supprimer apres comprehension
            console.log(result) //inspect la response et verifie le mail et le nom vient comment
            document.getElementById('pseudo').innerHTML=result['pseudo']
            document.getElementById('email').innerHTML=result['email']
            document.getElementById('telephone').innerHTML=result['telephone']
          }).catch(err=>console.log('error',err))
        }
      }
      document.addEventListener('DOMContentLoaded',getUserDatas, false)
    </script>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#18345D; ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: white;"></i></a>
      </li>
       <li class="nav-link text-white" id="content-name">
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
    </ul>
  </nav>
  <!-- /.navbar -->
  <?php include('menu_left.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Dashboard v2</h1> -->
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <div class="container-fluid">
        <!-- Info boxes -->
        <a id="display-all-btn" class="btn btn-success mb-5">Voir plus</a>
        <div class="row" id="card-container">
          <div class="clearfix hidden-md-up"></div> 
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="position: relative; bottom: 0;">
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
         
          <a href="messagerie" class="btn b1footer"style="font-size: 30px; width: 100px; ;">
            <i class="far fa-comments" style="color:#18345D"></i>
            <span class="badge navbar-badge" style="background-color:red;color: white;" id="comment-counter">0</span>
          </a>
        </div>
      </div>
    </div>
</script>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>


<script type="text/javascript">

let displayAllClicked = false;

const displayAllBtn = document.getElementById("display-all-btn");
displayAllBtn.addEventListener("click", () => {
    displayAllClicked = !displayAllClicked;
    services()
});


function services(){
      var reqHeaders = new Headers();
      var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
      console.log(saved_token.token,"saved toke")
      reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
      reqHeaders.append("Content-Type","application/json")

    fetch(`https://jess-backend.onrender.com/api/v1/services`,{
        method: "GET",
        headers: reqHeaders
    }).then(res => res.json())
    .then(data => {
        const content = document.getElementById("card-container")

   
        if(data.status === "success"){
         
          let servicesToDisplay = data.services;
              if (!displayAllClicked) {
                  servicesToDisplay = data.services.slice(0, 4);
              }
            
           // if display all is clicked use data.services otherwise data.services.slice(0,4)
           servicesToDisplay.forEach(service =>{
            console.log(service.commentsCount, "comments counter")
                const ele1 = document.createElement("div");
                ele1.className = "col-12 col-sm-6 col-md-6";
                console.log("view service: ", service)
            ele1.innerHTML = `
            <div class="info-box mb-3" value="${service.id}" id="card-info">
              <span class="info-box-icon "><i class="fas fa-tools" style="color:#18345D;"></i></span>
              <div class="info-box-content">
                <p class="small-box-footer" style="font-weight:bold;font-family: Arial;">${service.name}</p>
                 <a href="forum_maint?id_service=${service.id}" class="small-box-footer" style="color:#18345D; font-size:15px;">Contactez-nous pour la maintenance et la reparation des vos installations electriques et équipements electroniques</a>
                 <div style="display:inline;">
                  <span><a onclick="like(event,${service.id})" class="btn" style="font-size: 30px; width: 150px;">
                    <i class="far fa-heart" title="notification" style="color:#18345D"></i>
                   <span class="badge badge-warning navbar-badge"style="background-color:#18345D;color: white;font-weight: bold;" id="like-count">${service.likes}</span></a></span>
                  <span><a href="#" class="btn mdc" style="font-size: 30px; width: 150px;">
                    <i class="far fa-comments" title="notification" style="color:#18345D"></i>
                   <span class="badge badge-warning navbar-badge" style="background-color:red;color: white;font-weight: bold;">${service.commentsCount}</span></a></span>
              </div>
              </div>
              <a href="#" class="small-box-footer" style="color:#18345D;">Plus... <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            `;
            content.appendChild(ele1);
            })
        }
    })
  }

  function like(e, id){
    e.preventDefault();
    var reqHeaders = new Headers();
    var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
    console.log(saved_token.token,"saved toke")
    reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
    reqHeaders.append("Content-Type","application/json")

  fetch(`https://jess-backend.onrender.com/api/v1/services/${id}/like`,{
      method: "POST",
      headers: reqHeaders,
  }).then(res => res.json())
  .then(data => {
      console.log(data)
      if(data.status === "success"){
          console.log("liked", data)
          window.location.reload()
      }
      getLikes();
  })
  .then(res=> set_url(id))
  .catch(err => console.log(err))
}


function getLikes(){
    var reqHeaders = new Headers();
    var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
    console.log(saved_token.token,"saved toke")
    reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
    reqHeaders.append("Content-Type","application/json")
    const id = new URLSearchParams(window.location.search).get('service_id')

  fetch(`https://jess-backend.onrender.com/api/v1/services/${id}/likes`,{
      method: "GET",
      headers: reqHeaders,
  }).then(res => res.json())
  .then(data => {
   
      if(data.status === "success"){
          console.log("All likes", data.service.likes)
         
          // document.getElementById("like-count").innerHTML = data.service.likes
      }
  })
}


      function set_url(id){
          const searchParams = new URLSearchParams(window.location.search);
          searchParams.set('service_id', id);
          window.history.replaceState({}, '', `${window.location.pathname}?${searchParams.toString()}`);
          // window.location.reload()
      }



  window.addEventListener("DOMContentLoaded", (e) => {
    services();

    setTimeout(() => {
      getLikes();
    }, 1000);
  })
</script>
</body>
</html>
