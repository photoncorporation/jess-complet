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
      <div id="err_msg" class=" " role="alert" ></div>
      <form action="" method="post" onsubmit="resetpassword(event)">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Entrer votre mail" name="email">
          <div class="input-group-append">
            <div class="input-group-text"style="background-color: #18345D;">
              <span class="fas fa-envelope text-white"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn- btn-block text-white" style="background-color: #18345D; font-weight:bold;"> Entrer votre mail</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="login" style="color:#18345D; ">Login</a>
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
const ele = document.createElement("div");
$(ele).attr({
  id: "alert-element",
  class: "alert alert-success"
})
.html("Vous avez recu un message !");

const spn = document.createElement("span")
$(spn).attr({
  id: "loader-spn",
  class: "spinner-border spinner-border-sm mx-2"
})
const resetpassword = (e) => {
  $(ele).remove()
  $('[name="submit"]').append(spn);
  const formData = new FormData(e.target);
  const formProps = Object.fromEntries(formData);

  e.preventDefault();
  var data = JSON.stringify(formProps);

  fetch("https://jess-backend.onrender.com/api/v1/auth/password-reset", {
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
      console.log("check reset",res2.status === "success");
      if(res2.status === "success"){
        console.log("check reset success", res2)
        // setCookie('token', res2 && res2['token'] ,7);
        $('#loader-spn').remove();
        // window.localStorage.setItem("_currentUser", JSON.stringify(res2))
        // window.location.replace("./reset_password");
      }else{
        $('#loader-spn').remove()
        $("#err_msg").html(ele)

        console.log(res2)
        // document.getElementById('err_msg').innerHTML = ""
      }
    }).catch(err => console.log(err.message));

  }
  

</script>
</body>
</html>
