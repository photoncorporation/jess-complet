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
                <ul class="nav nav-pills d-flex justify-content-between">
                  <li class="nav-item"><a class="nav-link " href="#settings" data-toggle="tab" style="color:#18345D;">Details d'utilisateur</a></li>
                  <li class="nav-item d-flex" id="action">
                    <a id="service" onclick="setIdToURL(event)" class="nav-link bg-gradient-success text-white mr-4">Demandes Service</a>
                    <a id="abonnement" class="nav-link bg-gradient-primary text-white" onclick="setIdToURL2(event)">Demandes Abonnement</a>
                  </li>
                </ul>
              </div><!-- /.card-header -->

              <div class="card-body">
                  <div id="content">
                  </div>
            </div>
            <!-- /.card -->
          </div>
    </section>
    <!-- /.content -->
     <!-- Main content -->
  
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

function service_details(){
  const reqHeaders = new Headers();
  const user = JSON.parse(localStorage.getItem("_currentUser"))
  console.log(user.role,"saved toke")
  reqHeaders.append("Authorization",`Bearer ${user.token}`) 
  reqHeaders.append("Content-Type","application/json")
  
  const urlParams = new URLSearchParams(window.location.search);
  let id = urlParams.get('id');
  console.log(id,"id");

    fetch(`http://localhost:7000/api/v1/auth/users_all/${id}`,{
        method: "GET",
        headers: reqHeaders
    }).then(res => res.json())
    .then(data => {
        const content = document.getElementById("content")
        const actions = document.getElementById("action")

        // const urlParams = new URLSearchParams(window.location.search);
        // let user_id = urlParams.get('id');
        // const searchParams = new URLSearchParams(window.location.search);
        // searchParams.set('user_id', user_id);
        // window.history.replaceState({}, '', `${window.location.pathname}?${searchParams.toString()}`);

        // const elements = `
        //             <a class="nav-link bg-gradient-success text-white mr-4" href="user_services?user_id=${user_id}" data-toggle="tab">Demandes Service</a>
        //             <a class="nav-link bg-gradient-primary text-white" href="user_abonnements?user_id=${user_id}" data-toggle="tab">Demandes Abonnement</a>
        //          `;
        // actions.innerHTML = elements;
        
        if(data.status == "success"){
         console.log(data.users.role, data.users.role !== "user", "do we have role")
          if(data.users.role !== "user"){
            actions.classList.remove("d-flex")
            actions.classList.add("d-none")
          }
            const ele1 = document.createElement("div");

            ele1.innerHTML = `
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Service Details</h3>
              </div>
                <div class="card-body">
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Nom</b> <a class="float-right">${data.users.name}</a>
                        </li>
                      
                        ${user.user.role === "superadmin" ? `
                        <form class="form-horizontal" style="display:flex; justify-content:space-between; align-items:center;" action="" method="PATCH"  onsubmit="updateEmail(event)" >
                          <div class="form-group row col-sm-10">
                            <label for="email" class="col-sm-10" col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" name="email" value="${data.users.email}" class="form-control" id="email" placeholder="Email" required />
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-" style="background-color: #18345D; color:white;">Actualiser</button>
                            </div>
                          </div>
                        </form>
                        `: 
                        `<li class="list-group-item">
                            <b>Email</b> <a class="float-right">${data.users.email}</a>
                        </li>
                            `
                          } 

                        <li class="list-group-item">
                            <b>Telephone</b> <a class="float-right">${data.users.telephone}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Adresse</b> <a class="float-right">${data.users.address}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Type de compte</b> <a class="float-right">${data.users.type}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Pseudo</b> <a class="float-right">${data.users.pseudo}</a>
                        </li>
                        
                        ${user.user.role === "superadmin" ? `

                          <span class="d-flex justify-content-between gap-x-5 items-center">
                          <p><b>Role</b></p>
                          </span>
                          <select class="form-control" id="myRole" value="${data.users.role}" onchange="change_role()" name="role">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>` : `<li class="list-group-item">
                          <b>Role</b> <a class="float-right">${data.users.role}</a>
                          </li>
                        `
                        } 
                       
                                 
                        <li class="list-group-item">
                            <b>Actif</b> <a class="float-right">${data.users.is_active}</a>
                        </li>
                    </ul>
                </div>
            </div>`
            content.appendChild(ele1)
        }
        // content.appendChild(ele1)
    })
}
 

function setIdToURL(e){
    // e.preventDefault()
    const li = document.getElementById("action")
    const a2 = document.getElementById("service")
    const searchParams = new URLSearchParams(window.location.search);
    const user_id = searchParams.get('id');
    a2.href += `user_services?user_id=${user_id}` 
    li.appendChild(a)
    window.history.replaceState({}, '', `${window.location.pathname}?${searchParams.toString()}`);
}

function setIdToURL2(e){
    // e.preventDefault()
    const li = document.getElementById("action")
    const a = document.getElementById("abonnement")
    const searchParams = new URLSearchParams(window.location.search);
    const user_id = searchParams.get('id');
    a.href += `user_abonnements?user_id=${user_id}`
    li.appendChild(a)
    window.history.replaceState({}, '', `${window.location.pathname}?${searchParams.toString()}`);
}

function change_role(){
  var reqHeaders = new Headers();
  var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
  console.log(saved_token.token,"saved toke")
  reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
  reqHeaders.append("Content-Type","application/json")
  
  const urlParams = new URLSearchParams(window.location.search);
  const id = urlParams.get('id');
  const select = document.getElementById("myRole")
  select.addEventListener("change",function(){
    fetch(`http://localhost:7000/api/v1/auth/users_all/${id}`,{
        method: "PATCH",
        headers: reqHeaders,
        body: JSON.stringify({
            role: select.value
        })
    }).then(res => res.json())
    .then(data => {
      console.log(data,"check if data is changed")
        if(data.status === "success"){
            select.value = data.user.role
        }
    }).catch(error => {
        console.log(error)
    })
  })
}


function updateEmail(e){
      e.preventDefault();

      var reqHeaders = new Headers();
      var saved_token = JSON.parse(localStorage.getItem("_currentUser"))
      console.log(saved_token.token,"saved toke")
      reqHeaders.append("Authorization",`Bearer ${saved_token.token}`) 
      reqHeaders.append("Content-Type","application/json")

      const formData = new FormData(e.target);
      const formProps = Object.fromEntries(formData);
      console.log(formProps);
     
      var data = JSON.stringify(formProps);

      const urlParams = new URLSearchParams(window.location.search);
      let id = urlParams.get('id');
      console.log(id,"id");
     // Send the updated information to the server  https://jess-backend.onrender.com/api/v1/auth/update
      fetch(`http://localhost:7000/api/v1/auth/users_all/${id}/email`, {
        method: 'PATCH',
        headers: reqHeaders,
        body: data
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          console.log("email updated")
          window.location.reload();
        } else {
          // Inform the user of the failure
          console.log('Email update failed');
        }
      })
      .catch(error => {
        // Inform the user of the failure
        console.log('Profile update failed');
      });
  }

// && `<select class="form-control" id="myRole" value="${data.users.role}" onchange="change_role()" name="role">
//                                 <option value="admin">Admin</option>
//                                 <option value="user">User</option>
//                             </select>`


window.addEventListener('DOMContentLoaded', service_details)
</script>
</body>
</html>
