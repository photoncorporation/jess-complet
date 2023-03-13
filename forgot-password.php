<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jess | Reset Mot de passe</title>

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
<body class="hold-transition login-page"style="background-color: #18345D;">
<div class="login-box">
  <div class="login-logo">
    <img src="dist/img/jess_logo.png" width="20%">
  </div>
  <div class="card card-primary">
    <div class="card-body">
      <p class="login-box-msg text-left" style="font-size:14px; font-family:Arial;">avez-vous oublié votre mot de passe ? Ici, vous pouvez facilement récupérer un nouveau mot de passe.</p>
      <form action="" method="post" onsubmit="resetpassword(event)">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" required="">
          <div class="input-group-append">
            <div class="input-group-text"style="background-color: #18345D;">
              <span class="fas fa-envelope text-white"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn- btn-block text-white" style="background-color: #18345D; font-weight:bold;"> Nouveau mot de passe</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="login.php" style="color:#18345D;">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script type="text/javascript">
// WARNING: For POST requests, body is set to null by browsers.
const newpassword = (e) => {
  const formData = new FormData(e.target);
  const formProps = Object.fromEntries(formData);
  console.log(formProps);
  e.preventDefault();
  var data = JSON.stringify(formProps);
  console.log(data);
fetch("http://localhost:7000/api/v1/auth/password-reset/:userId/:token", {
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
  }).then(res => {
    res.json().then(res2 => {
      console.log(res2); 
      document.getElementById('err_msg').innerHTML = 'connexion reussi';
      localStorage.setItem('token', res2.token);
      // window.location = "index.php"
    })
       
  }).catch(err => {
    console.log(err);
  })

  }

</script>
</body>
</html>
