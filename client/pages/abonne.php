<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Abonnement</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="shortcut icon" href="dist/img/jess_logo.png">
    <style type="text/css">
   main {

}
summary {
  font-size: 1.25rem;
  font-weight: 500;
  background-color: rgb(249,249,249);
  border:1px solid  rgb(232,233,235);
  color:rgb(23,48,88);
  padding: 1rem;
  margin-bottom: 1rem;
  outline: none;
  border-radius: 0.25rem;
  text-align: left;
  cursor: pointer;
  position: relative;
}
p { text-align: left; }
details[open] summary ~ * {
  animation: sweep .6s ease-in-out;
}
</style>
</head>
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
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
  

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
     
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('menu_left.php'); ?>

    <!-- Main content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <!--  <h4 style="color:black; font-weight:bold;"><span style="color:#88C1E7;">Abonnement</span></h4> -->
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div> Message d'alerte</div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-9">
            <div class="card">
              <div class="card-header">
                <a href="home" class="small-box-footer" style="color:#18345D;"><i class="fas fa-arrow-circle-left"></i> Retour</a>
               <label class="col-form-label" for="inputWarning" style="float: right;">Choisir mon abonnement</label> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="#" method="post" onsubmit="post_demand(event)">
                       <div class="form-group" id="service-container">
                          <select name="service" id="service" class="form-control" style="width: 50%;">
                            <option value="">Choisir un service</option>
                          </select>
                       </div>
                      <hr>
                      <p>Dur??e de vie (avec renouvellement) :</p>
                      <hr>
                    <p>
                      <div class="form-group">
                        <div class="form-group" id="service-container">
                            <select name="service" id="duree" class="form-control" style="width: 50%;">
                              <option value="">Choisir une duree</option>
                              <option value="1 semaine">1 semaine</option>
                              <option value="2 semaines">2 semaines</option>
                              <option value="3 semaines">3 semaines</option>
                              <option value="1 mois">1 mois</option>
                              <option value="2 mois">2 mois</option>
                              <option value="3 mois">3 mois</option>
                              <option value="4 mois">4 mois</option>
                              <option value="5 mois">5 mois</option>
                              <option value="6 mois">6 mois</option>
                            </select>
                        </div>
                           
                          </div>
                          </p>
                          <hr>
                          <p style="font-family: arial;font-size:15px;"><em>Veillez ajouter un commentaire avant d???envoer votre formulaire ; vous serez notif?? dans 48h pour la suite du processus :</em></p>
                          <div class="card-footer">
                            
                              <label>commentaire</label>
                              <div class="input-group">
                                <textarea cols="10" class="form-control" name="description_service" id="description_service" placeholder="Ajouter une description"></textarea>
                              </div>
                           
                          </div>
                          <hr>
                          <div class="float-right">
                            <button type="submit" class="btn btn" style="background-color:#18345D; border:2px solid rgb(101,147,183); font-weight: bold; color: white;">Enregister</button>
                          </div>
                        
                        </div>
                        <br><br><br><br>
                      </form>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          
      </div>
      <!-- /.row -->
      
      </div>
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>
  <!-- Control Sidebar -->
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
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })

  function getServices(){
      var reqHeaders = new Headers();
      var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
      console.log(saved_token.token,"saved toke")
      reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
      reqHeaders.append("Content-Type","application/json")

    fetch(`http://localhost:7000/api/v1/services`,{
        method: "GET",
        headers: reqHeaders
    }).then(res => res.json())
    .then(data => {
        const content = document.getElementById("service")
       
        console.log(data,"datarr")
        if(data.status === "success"){
            
            data.services.forEach(service =>{
              content.innerHTML += `
                        <select class="form-control" id="service" onchange="select_service()">
                            <option value="${service.id}">${service.name}</option>
                        </select>
                              `
            })
        }
    })
  }

  function post_demand(e){
    e.preventDefault()
    var reqHeaders = new Headers();
    var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
    console.log(saved_token.token,"saved toke")
    reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
    reqHeaders.append("Content-Type","application/json")

    let id = document.getElementById("service").value
    let description = document.getElementById("description_service").value
    let duree = document.getElementById("duree").value

    const data = {
        description_service: description,
        duree
    }

    fetch(`http://localhost:7000/api/v1/services/${id}/abonnement`,{
        method: "POST",
        headers: reqHeaders,
        body: JSON.stringify(data)
    }).then(res => res.json())
    .then(data => {
        if(data.status === "success"){
          console.log(data,"dataeeeeeeeeeeeeeeeee")
          document.getElementById("service").value = ""
          document.getElementById("description_service").value = ""
          document.getElementById("duree").value = ""
          showMessageSetTimeout()
        }
        // show success message
        
    })
  }

  function showMessageSetTimeout(){
          setTimeout(() => {
            getServices()
          }, 1000);
  }

  window.addEventListener("DOMContentLoaded", getServices)

</script>
</body>
</html>
