<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jess | Registration Page</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link rel="shortcut icon" href="dist/img/jess_logo.png">
</head>
<body class="hold-transitioqn register-page"style="background-color: #18345D;" >
<div class="register-box">
  <div class="login-logo">
    <img src="dist/img/jess_logo.png" width="10%">
  </div>
  <div class="card">
    <div class="card-body register-card-body">
      <div id="err_msg" class="" role="alert" ></div> 
      <form action="" method="post" onsubmit="register(event)" class="mt-4">
         <div class="input-group mb-3">
          <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user" style="color: #18345D;"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope" style="color: #18345D;"></span>
            </div>
          </div>
        </div>
          <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock" style="color: #18345D;"></span>
            </div>
          </div>
        </div>
          <div class="input-group mb-3">
          <input type="phone" class="form-control" name="telephone" placeholder="Telephone" required/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone" style="color: #18345D;"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select class="custom-select rounded-0" name="type" id="exampleSelectRounded0" style="color: #18345D; font-weight:bold;" required>
                <option style="color: #18345D; font-weight:bold;">Entreprise</option>
                <option style="color: #18345D;font-weight:bold;">utilisateur</option>
              </select>
        </div>
        </div>
        <div class="row">
          <div class="col-4"></div> 
          <!-- /.col -->
          <div class="col-7">
            <button type="submit" class="btn btn- btn-block text-white" style="background-color: #18345D; font-weight: bold;">S'abonner</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
       <hr>
      <a href="login" class="text-center" style="color:#18345D;">Je suis déjà abonné</a>
      <br>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script type="text/javascript">
// WARNING: For POST requests, body is set to null by browsers.
// const ele = document.createElement("div");
// $(ele).attr({
//   id: "alert-element",
//   class: "alert alert-danger"
// })
// .html("Mot de passe ou adresse mail incorrect !");

const ele1 = document.createElement("div");
$(ele1).attr({
  id: "alert-element",
  class: "alert alert-success"
})
.html("Utulisateur creer avec success !");

const spn = document.createElement("span")
$(spn).attr({
  id: "loader-spn",
  class: "spinner-border spinner-border-sm mx-2"
})
const register = (e) => {
  $(ele1).remove()
  $('[name="submit"]').append(spn);
  const formData = new FormData(e.target);
  const formProps = Object.fromEntries(formData);
  console.log(formProps);
  e.preventDefault();
  var data = JSON.stringify(formProps);
  console.log(data);
fetch("http://localhost:7000/api/v1/auth/register", {
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: {
      'Content-Type': 'application/json'
      // 'Content-Type': 'application/x-www-form-urlencoded',
    },
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    body: data // body data type must match "Content-Type" header
  }).then(res => res.json())
  .then(res2 => {
      console.log(res2); 
      $('#loader-spn').remove();
      if(res2.status == "Utilisateur créé avec succès"){
        document.getElementById('err_msg').innerHTML = 'utilisateur créer avec succees';
        window.location = "login"
      }else{
        document.getElementById('err_msg').innerHTML = 'utilisateur deja existant';
      }
  }).catch(err => {
    console.log(err);
  })

  }
</script>
</body>
</html>
