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
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link " href="#settings" data-toggle="tab" style="color:#18345D;">Nouvel service</a></li>
                  <!--  <li class="nav-item"><a class="nav-link" href="#Monprofil" data-toggle="tab"style="color:#18345D;font-weight: bold;">Actualiser mon profil</a></li> -->
                </ul>
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="settings">
                    <div id="err_msg" class="" role="alert" ></div>
                    <form class="form-horizontal" action="" method="POST"  onsubmit="service(event)" >
                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nom du service</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" class="form-control" id="name" placeholder="service" required />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="description" name="description" placeholder="Description" required ></textarea>
                        </div>
                      </div>
                     
                  
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="submit" class="btn btn-" style="background-color: #18345D; color:white;">Ajouter</button>
                        </div>
                      </div>
                    </form>
                  </div>

              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </section>
    <!-- /.content -->
     <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="card">
             <div class="card-header">
                <a href="index.php" class="small-box-footer" style="color:#18345D;font-weight: bold;"><i class="fas fa-list" ></i> Liste des services</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                   <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="color:#18345D; font-weight: bold;">id</th>
                    <th style="color:#18345D; font-weight: bold;">Pseudo</th>
                    <th style="color:#18345D; font-weight: bold;">Designation</th>
                 <!--    <th style="color:#18345D; font-weight: bold;">Role</th> -->
                    <th style="color:#18345D; font-weight: bold;">actions</th>
                  </tr>
                  </thead>
                  <tbody id="content">
                  
            
                  </tbody>
                  <tfoot>
                   <!-- <tr>
                    <th>Images</th>
                    <th>nom</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>competences</th>
                    <th>Residence</th>
                    <th>actions</th>
                  </tr> -->
                  </tfoot>
                </table>
             </div>
    </section>
    <!-- /.content -->
  </div>
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
 const service = (e) => {
  const formData = new FormData(e.target);
  const formProps = Object.fromEntries(formData);
  console.log(formProps);
  e.preventDefault();
  var data = JSON.stringify(formProps);
  var reqHeaders = new Headers();
  var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
  console.log(saved_token.token,"saved toke")
  reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
  reqHeaders.append("Content-Type","application/json")

  fetch("http://localhost:7000/api/v1/service", {
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: reqHeaders,
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    body: data // body data type must match "Content-Type" header
  }).then(res => res.json())
  .then(res => {
    console.log(res.status);
    if(res.status === 'success'){
      $("#alert-element").remove();
      $("#alert-container").append(ele1);
      setTimeout(() => {
        $("#alert-element").remove();
      }, 3000);
      
      formProps.name = "";
      formProps.description = "";

      window.location.reload();

    }
  })
  .catch(err => {
    console.log(err);
  })
   
  }

  const getServices = () =>{
    var reqHeaders = new Headers();
  var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
  console.log(saved_token.token,"saved toke")
  reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
  reqHeaders.append("Content-Type","application/json")
   
  fetch("http://localhost:7000/api/v1/services", {
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

                    res2.services.forEach((service) => {
                      const tr = document.createElement('tr')
                    
                      tr.innerHTML = `
                      <td style="color:black; font-size:16px;">${service.id}</td>
                      <td style="color:black; font-size:16px;"><a href="">${service.name}</a></td>
                      <td style="color:black; font-size:16px;">${service.description}</a></td>
                      <td class="text-center">
                        <div class="d-flex justify-content-around ">
                          <a href="update_service?id=${service.id}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                          <a href="details_service?id=${service.id}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                          <button type="button" id="desactiver" class="btn btn-success" onclick="desactiverCompte(${service.id})">
                              ${service.is_active ? `<i class="fas fa-user-check"></i>` : `<i class="fas fa-user-times"></i>`}
                          </button>
                        </div>
                      </td>
                      `
                    content.appendChild(tr)
                        // http://localhost/jess_admin/abonnement?id_service=${user.id}
                        // <button class="btn btn-danger" onclick="deleteService(${service.id})"><i class="fas fa-trash"></i></button>
        })
        })
          
      }).catch(err => {
        console.log(err);
  })

  console.log("get users")

  }

  function deleteService(id){
    var reqHeaders = new Headers();
    var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
    console.log(saved_token.token,"saved toke")
    reqHeaders.append("Authorization",`Bearer ${saved_token.token}`)
    reqHeaders.append("Content-Type","application/json")
  // http://localhost/jess_admin/abonnement?id_service=${user.id}
  fetch(`http://localhost:7000/api/v1/services/${id}`, {
    method: 'DELETE', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: reqHeaders,
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
  }).then(res => {
    res.json().then(res2 => {
      console.log(res2,"reponse users"); 
      // window.location.reload();
    })
       
  }).catch(err => {
    console.log(err);
  })
  }

  function desactiverCompte(id){
  const reqHeaders = new Headers();
  const saved_token = JSON.parse(localStorage.getItem("_currentUser"))
  console.log(saved_token.token,"saved toke")
  reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
  reqHeaders.append("Content-Type","application/json")

  fetch(`http://localhost:7000/api/v1/services/${id}/desactiver`, {
    method: 'PATCH', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: reqHeaders,
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
  }).then(res => {
    res.json().then(res2 => {
      console.log(res2,"Success desactiver"); 
      // window.location.reload()
    })
       
  }).catch(err => {
    console.log(err);
  })
  }
window.addEventListener('DOMContentLoaded', getServices)
</script>
</body>
</html>
