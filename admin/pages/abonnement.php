<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nouveau Service</title>
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
      <li class="nav-link text-white" id="content-name">
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
   <?php include ('menu_left.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Commandes</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="card">
              <h1 class="text-center mt-4" style="color:#18345D; font-weight: bold;">Liste de demandes d'abonnement </h1>
              <hr>
             <div class="card-header">
                <a href="index.php" class="small-box-footer" style="color:#18345D;"><i class="fas fa-arrow-circle-left"></i> Retour</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                   <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="color:#18345D; font-weight: bold;">id</th>
                    <th style="color:#18345D; font-weight: bold;">Description</th>
                    <th style="color:#18345D; font-weight: bold;">Etat</th>
                    <th style="color:#18345D; font-weight: bold;">userID</th>
                    <th style="color:#18345D; font-weight: bold;">serviceID</th>
                    <th style="color:#18345D; font-weight: bold;">Client</th>
                    <th style="color:#18345D; font-weight: bold;">Actions</th>
                  </tr>
                  </thead>
                  <tbody id="content"></tbody>
                  <tfoot>
                  </tfoot>
                </table>
             </div>
    </section>
    <!-- /.content -->
  </div>
 <?php include("footer.php"); ?>
<!-- ./wrapper -->

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

<script type="text/javascript">
  const ele1 = document.createElement("div");
$(ele1).attr({
  id: "alert-element",
  class: "alert alert-success"
})
.html("Service creer avec succè !");

const spn = document.createElement("span")
$(spn).attr({
  id: "loader-spn",
  class: "spinner-border spinner-border-sm mx-2"
})

  const getServices = () =>{
    var reqHeaders = new Headers();
  var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
  console.log(saved_token.token,"saved toke")
  reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
  reqHeaders.append("Content-Type","application/json")
   
  fetch("https://jess-backend.onrender.com/api/v1/abonnements/services/available", {
    method: 'GET', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: reqHeaders,
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
  }).then(res => {
    res.json().then(res2 => {
      console.log(res2,"reponse users"); 
      const content = document.getElementById('content')

                    res2.demandes.forEach((demande) => {
                      const tr = document.createElement('tr')
                    
                      tr.innerHTML = `
                            <td style="color:black; font-size:16px;">${demande.id}</td>
                            <td style="color:black; font-size:16px;">${demande.description_service}</a></td>
                            <td style="color:black; font-size:16px;">${demande.etat}</a></td>
                            <td style="color:black; font-size:16px;">${demande.id_user}</a></td>
                            <td style="color:black; font-size:16px;">${demande.id_service}</a></td>
                            <td style="color:black; font-size:16px;">${demande.User.name}</a></td>
                            <td class="text-center">
                              <div class="btn-group btn-group-sm">
                              <a onclick="delete_abonnement(${demande.id})" class="btn btn-danger mr-2"><i class="fas fa-trash"></i></a>
                                <select class="form-control" id="commande-status" onchange="select_service(event,${demande.id})">
                                    <option value="En attente" ${demande.status === 'En attente' ? 'selected' : ''}>En attente</option>
                                    <option value="Approuvée" ${demande.status === 'Approuvée' ? 'selected' : ''}>Approuvée</option>
                                    <option value="Rejetée" ${demande.status === 'Rejetée' ? 'selected' : ''}>Rejetée</option>
                                </select>
                              </div>
                            </td>
                    `
                    content.appendChild(tr)
                        // http://localhost/jess_admin/abonnement?id_service=${user.id}
        })
        })
          
      }).catch(err => {
        console.log(err);
  })

  }

  function select_service(e, id){
  
  var select = document.getElementById("commande-status")
  
    var reqHeaders = new Headers();
    var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
    console.log(saved_token.token,"saved toke")
    reqHeaders.append("Authorization",`Bearer ${saved_token.token}`)
    reqHeaders.append("Content-Type","application/json")

    // data.value = e.target.value

    const data1 = {
     status: e.target.value
    }
    
fetch(`https://jess-backend.onrender.com/api/v1/services/${id}/abonnement/status`, {
  method: 'PATCH', // *GET, POST, PUT, DELETE, etc.
  mode: 'cors', // no-cors, *cors, same-origin
  cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
  credentials: 'same-origin', // include, *same-origin, omit
  headers: reqHeaders,
  redirect: 'follow', // manual, *follow, error
  referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
  body: JSON.stringify(data1) // body data type must match "Content-Type" header
}).then(res => {
  res.json().then(res2 => {
    console.log(res2,"reponse users"); 
    // const content = document.getElementById('content')
    if(res2.status === "success"){
      // document.getElementById("commande-status").value = e.target.value;
    }
    })
        
    }).catch(err => {
      console.log(err);
})
  
}

function delete_abonnement(id){
  
    var reqHeaders = new Headers();
    var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
    console.log(saved_token.token,"saved toke")
    reqHeaders.append("Authorization",`Bearer ${saved_token.token}`)
    reqHeaders.append("Content-Type","application/json")
    
  fetch(`https://jess-backend.onrender.com/api/v1/abonnements/services/available/${id}`, {
    method: 'DELETE', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: reqHeaders,
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
  }).then(res => res.json())
  .then(res2 => {
      if(res2.status === "success"){
        window.location.reload()
      }
          
      }).catch(err => {
        console.log(err);
  })
    
  }

window.addEventListener('DOMContentLoaded', getServices)
</script>
</body>
</html>
