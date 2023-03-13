<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jess| Reset Mot de passe</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page"style="background-color: #18345D;">
<div class="login-box">
  <div class="login-logo">
    <img src="dist/img/jess_logo.png" width="20%">
  </div>
  <div class="card card-primary">
    <div class="card-body">
      <p class="login-box-msg text-left" style="font-size:14px; font-family:Arial;">Entrer nouveau password</p>
      <div id="err_msg"></div>
      <form action="" method="post" onsubmit="newpassword(event)">
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Entrer un nouveau mot de passe" id="password">
          <div class="input-group-append">
            <div class="input-group-text"style="background-color: #18345D;">
              <span class="fas fa-envelope text-white"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn- btn-block text-white" style="background-color: #18345D;"> Nouveau mot de passe</button>
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
  e.preventDefault();
  var data = JSON.stringify(formProps);
  console.log(data);

  const user_id = new URLSearchParams(window.location.search).get('user_id')
  const token = new URLSearchParams(window.location.search).get('token')
  
fetch(`http://localhost:7000/api/v1/auth/password-reset/${user_id}/${token}`, {
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: {
      'Content-Type': 'application/json'
    },
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    body: data // body data type must match "Content-Type" header
  }).then(res => res.json())
  .then(res2 => {
      console.log(res2); 
      const alert = document.getElementById('err_msg');
      const password = document.getElementById('password');
      password.value = ''
      alert.setAttribute('role', 'alert');
      alert.className = 'alert alert-success';
      alert.innerHTML = 'Recuperation reussie';
      setTimeout(() => { 
        alert.setAttribute('role', 'alert');
        alert.removeAttribute('role');
        alert.className = ''
        alert.innerHTML = ''
      },2000)

      // redirect to login
      // window.location = 'login';
    })
    .catch(err => console.log(err));
  }

</script>
</body>
</html>
