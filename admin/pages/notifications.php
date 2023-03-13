<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Messager</title>
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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<style type="text/css">

.card {
    background: #fff;
    transition: .5s;
    border: 0;
    margin-bottom: 30px;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
}
.chat-app .people-list {
    width: 280px;
    position: absolute;
    left: 0;
    top: 0;
    padding: 20px;
    z-index: 7
}

.chat-app .chat {
    margin-left: 280px;
    border-left: 1px solid #eaeaea
}

.people-list {
    -moz-transition: .5s;
    -o-transition: .5s;
    -webkit-transition: .5s;
    transition: .5s
}

.people-list .chat-list li {
    padding: 10px 15px;
    list-style: none;
    border-radius: 3px
}

.people-list .chat-list li:hover {
    background: #efefef;
    cursor: pointer
}

.people-list .chat-list li.active {
    background: #efefef
}

.people-list .chat-list li .name {
    font-size: 15px
}

.people-list .chat-list img {
    width: 45px;
    border-radius: 50%
}

.people-list img {
    float: left;
    border-radius: 50%
}

.people-list .about {
    float: left;
    padding-left: 8px
}

.people-list .status {
    color: #999;
    font-size: 13px
}

.chat .chat-header {
    padding: 15px 20px;
    border-bottom: 2px solid #f4f7f6
}

.chat .chat-header img {
    float: left;
    border-radius: 40px;
    width: 40px
}

.chat .chat-header .chat-about {
    float: left;
    padding-left: 10px
}

.chat .chat-history {
    padding: 20px;
    border-bottom: 2px solid #fff
}

.chat .chat-history ul {
    padding: 0
}

.chat .chat-history ul li {
    list-style: none;
    margin-bottom: 30px
}

.chat .chat-history ul li:last-child {
    margin-bottom: 0px
}

.chat .chat-history .message-data {
    margin-bottom: 15px
}

.chat .chat-history .message-data img {
    border-radius: 40px;
    width: 40px
}

.chat .chat-history .message-data-time {
    color: #434651;
    padding-left: 6px
}

.chat .chat-history .message {
    color: #444;
    padding: 18px 20px;
    line-height: 26px;
    font-size: 16px;
    border-radius: 7px;
    display: inline-block;
    position: relative
}

.chat .chat-history .message:after {
    bottom: 100%;
    left: 7%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #fff;
    border-width: 10px;
    margin-left: -10px
}

.chat .chat-history .my-message {
    background: #efefef
}

.chat .chat-history .my-message:after {
    bottom: 100%;
    left: 30px;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #efefef;
    border-width: 10px;
    margin-left: -10px
}

.chat .chat-history .other-message {
    background: #e8f1f3;
    text-align: right
}

.chat .chat-history .other-message:after {
    border-bottom-color: #e8f1f3;
    left: 93%
}

.chat .chat-message {
    padding: 20px
}

.online,
.offline,
.me {
    margin-right: 2px;
    font-size: 8px;
    vertical-align: middle
}

.online {
    color: #86c541
}

.offline {
    color: #e47297
}

.me {
    color: #1d8ecd
}

.float-right {
    float: right
}

.clearfix:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

@media only screen and (max-width: 767px) {
    .chat-app .people-list {
        height: 465px;
        width: 100%;
        overflow-x: auto;
        background: #fff;
        left: -400px;
        display: none
    }
    .chat-app .people-list.open {
        left: 0
    }
    .chat-app .chat {
        margin: 0
    }
    .chat-app .chat .chat-header {
        border-radius: 0.55rem 0.55rem 0 0
    }
    .chat-app .chat-history {
        height: 300px;
        overflow-x: auto
    }
}

@media only screen and (min-width: 768px) and (max-width: 992px) {
    .chat-app .chat-list {
        height: 650px;
        overflow-x: auto
    }
    .chat-app .chat-history {
        height: 600px;
        overflow-x: auto
    }
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
    .chat-app .chat-list {
        height: 480px;
        overflow-x: auto
    }
    .chat-app .chat-history {
        height: calc(100vh - 350px);
        overflow-x: auto
    }
}
</style>
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
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

    <section class="content">
      <div class="container-fluid">
        <div class="row">
        
           <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <a href="index.php" class="small-box-footer" style="color:#18345D;"><i class="fas fa-arrow-circle-left"></i> Retour</a>
               
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="container">

                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card chat-app">
                               <div id="plist" class="people-list overflow-auto h-100">
                                  <div class="input-group">
                                    <i class="fa fa-users"></i> <span class="mx-4">all</span>
                                  </div>
                                  <hr>
                                  <ul class="list-unstyled chat-list mt-2 mb-0" id="list-content">
                                  </ul>
                              </div>
                                <div class="chat">
                                    <div class="chat-header clearfix">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                                </a>
                                                <div class="chat-about">
                                                    <h6 class="m-b-0" id="pseudo"></h6>
                                                    <small id="email"></small>
                                                </div>
                                            </div>
                                      
                                        </div>
                                    </div>
                                    <div class="chat-history">
                                        <ul class="m-b-0" id="message-container">
                                        </ul>
                                    </div>
                                    <div class="chat-message clearfix">
                                        <form action="" method="post" onsubmit="sendMessage(event)">
                                          <div class="input-group mb-0">
                                              <input type="text" class="form-control" name="contenu" id="contenu" placeholder="Enter text here...">   
                                              <button type="submit" class="input-group-prepend border-0">
                                                  <span class="input-group-text"><i class="fa fa-send"></i></span>
                                              </button>                                 
                                          </div>
                                        </form>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>   
              </div>
           </div>
          </div>
      </section>
    <style type="text/css">
      i:hover, i:focus {
       color: white;
        }
      a:hover, a:focus
      {
        color: white;
      }
    </style>
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
<!-- <script src="plugins/moment/moment.min.js"></script> -->
<script src="plugins/moment/moment-with-locales.min.js"></script>

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
<!-- <script src="dist/js/demo.js"></script> -->
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

  function getAdmins(){
      var reqHeaders = new Headers();
      var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
      console.log(saved_token.token,"saved toke")
      reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
      reqHeaders.append("Content-Type","application/json")

    fetch(`http://localhost:7000/api/v1/auth/users`,{
        method: "GET",
        headers: reqHeaders
    }).then(res => res.json())
    .then(data => {
        const main = document.getElementById("plist")
        const content = document.getElementById("list-content")

        if(data.status === "success"){
            console.log("check the length",data.users.length)
              data.users.forEach(admin =>{
                content.innerHTML += ` 
                            <li class="clearfix" onclick="set_url(${admin.id})">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                <div class="about">
                                    <div class="name">${admin.name || admin.email}</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>
                       
                            `
                           
                  main.appendChild(content)
                })
              }
              })
        }


        function sendMessage(e){
          e.preventDefault();
          const contenu = document.getElementById("contenu").value
          const receiver_id = new URLSearchParams(window.location.search).get('receiver_id')
          const sender_id = JSON.parse(localStorage.getItem("_currentUser")).user.id
          const reqHeaders = new Headers();
          const saved_token = JSON.parse(localStorage.getItem("_currentUser"))     
          reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
          reqHeaders.append("Content-Type","application/json")
         
          const data = {
            contenu,
            receiver_id,
            sender_id
          }
          fetch(`http://localhost:7000/api/v1/messages/${receiver_id}`,{
            method: "POST",
            headers: reqHeaders,
            body: JSON.stringify(data)
          }).then(res => res.json())
          .then(data => {
            if(data.status === "success"){
              // showMessageSetTimeout()
              document.getElementById("contenu").value = ""
              console.log(data,"Successfully passed")
               window.location.reload()
            }
          })
        }

        function getMessages(){
          const receiver_id = new URLSearchParams(window.location.search).get('receiver_id')
          const sender_id = JSON.parse(localStorage.getItem("_currentUser")).user.id.toString()

          console.log(receiver_id,"receiver_id",sender_id,"sender_id")
          const reqHeaders = new Headers();
          const saved_token = JSON.parse(localStorage.getItem("_currentUser"))     
          reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
          reqHeaders.append("Content-Type","application/json")
          
          fetch(`http://localhost:7000/api/v1/messages/${sender_id}/${receiver_id}`,{
            method: "GET",
            headers: reqHeaders
          }).then(res => res.json())
          .then(data => {
          const main = document.getElementById("message-container")
          const content = document.createElement("li")
          content.className = "clearfix d-flex flex-column"
          content.style = "row-gap: 20px"
          const card = document.querySelector(".bg-message-card")
          console.log(data,"data")

          if(data.status === "success"){
          
            data.messages.forEach(message =>{
                message.messages.forEach(messag =>{
                  console.log(messag,"Single message details")
                  if(messag.sender.id == sender_id){
                    content.innerHTML += ` 
                    <div class="message-data">
                      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                      <div class="d-flex flex-column">
                        <span class="message-data-time">${messag?.sender?.pseudo || messag?.sender?.name}</span>
                        <span class="message-data-time">${moment(messag.createdAt).locale('fr').format('LLL')}</span>
                      </div>
                    </div>

                    <div class="message my-message bg-message-card float-right" id="user-id">
                        ${messag.contenu}
                    </div>`
                  }else{
                    
                    content.innerHTML += ` 
                    <div class="message-data d-flex justify-content-end">
                     <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                     <div class="d-flex flex-column">
                        <span class="message-data-time">${messag?.sender?.pseudo || messag?.sender?.name}</span>
                        <span class="message-data-time">${moment(messag.createdAt).locale('fr').format('LLL')}</span>
                      </div>
                   </div>

                    <div class="message other-message bg-message-card float-left" id="user-id">
                        ${messag.contenu}
                    </div>`
                    

                    
                  }
                
                });
              })

              main.appendChild(content)
              
        }
      })
    }


    function showMessageSetTimeout(){
          setTimeout(() => {
            getMessages()
          }, 1000);
    }

        function set_url(id){
          const searchParams = new URLSearchParams(window.location.search);
          searchParams.set('receiver_id', id);
          window.history.replaceState({}, '', `${window.location.pathname}?${searchParams.toString()}`);
          window.location.reload()
        }

        function get_current_user(){
          const user = JSON.parse(localStorage.getItem("_currentUser"))
          document.getElementById("email").innerHTML = user.user.email
         document.getElementById("pseudo").innerHTML = user.user.name || user.user.pseudo
        }

       window.addEventListener("DOMContentLoaded",()=>{
        getAdmins()
        getMessages()
        get_current_user()
        })
</script>
</body>
</html>
