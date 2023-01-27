<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jess | Connexion</title>
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
<body class="hold-transition login-page" style="background-color: #18345D;">
<div class="login-box">
  <div class="login-logo">
    <img src="dist/img/jess_logo.png" width="20%">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <div id="err_msg" class="" role="alert" ></div>
      <form action="" method="POST" class="mt-4" onsubmit="login(event)" id="forminscription">
        <div class="input-group mb-3">
          <input type="email" class="form-control text-black" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"style="color:#18345D;"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control text-black" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock" style="color:#18345D;"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>-->
          </div> 
          <!-- /.col -->
          <div class="col-8">
            <button type="submit" name="submit"  class="btn btn- btn-block text-white" style="background-color: #18345D; font-weight: bold;">Se Connecter</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <br>

      <p class="mb-1">
        <a href="forgot-password" style="color:#18345D; ">Mot de passe oublié?</a>
      </p>
      <p class="mb-0">
        <a href="register" style="color:#18345D;">S'enregistre comme abonné</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<script src="cookie_broker.js"></script>
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
  class: "alert alert-danger"
})
.html("Mot de passe ou adresse mail incorrect !");

const spn = document.createElement("span")
$(spn).attr({
  id: "loader-spn",
  class: "spinner-border spinner-border-sm mx-2"
})
const login = (e) => {
  $(ele).remove()
  $('[name="submit"]').append(spn);
  const formData = new FormData(e.target);
  const formProps = Object.fromEntries(formData);

  e.preventDefault();
  var data = JSON.stringify(formProps);

  fetch("https://jess-backend.onrender.com/api/v1/auth/login", {
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
      console.log(res2.hasOwnProperty("token"),"check owner key")
      if(res2.hasOwnProperty("token")){
        setCookie('token', res2 && res2['token'] ,7);
        $('#loader-spn').remove();
        console.log(res2.user.role === "user")
        if(res2.user.role === "admin"){
          window.location.replace("admin-dashborad");
        }else{
          window.location.replace("home");
        }
        window.localStorage.setItem("_currentUser", JSON.stringify(res2))
        // window.location.replace("./home");
      }else{
        $('#loader-spn').remove()
        $("#err_msg").html(ele)
        // document.getElementById('err_msg').innerHTML = ""
      }
    })
       
  }).catch(err => {
    console.log(err);
  })
}

</script>



<!-- <script type="text/javascript">
  const login =(e)=>{
    e.preventDefault();

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    const formData = new FormData(e.target);
    const formProps = Object.fromEntries(formData);
   
    var data = JSON.stringify(formProps);
    console.log(data);

    var raw = JSON.stringify({
      "email": "josuemwafrika2019@gmail.com",
      "password": "1234567"
    });

    var requestOptions = {
      method: 'POST',
      headers: myHeaders,
      body: data,
      redirect: 'follow'
    };

    fetch("https://jess-backend.onrender.com/api/v1/auth/login", requestOptions)
      .then(response => response.text())
      .then((result)=>{

        document.getElementById('err_msg').innerHTML = result;
        // console.log("resultat: "+result);
        var rep = {"message":"Mauvais email ou mot de passe"};
        localStorage.setItem('token', result.token);
        // window.location = "index.php"
        // if (result == rep) {
        //   console.log("faut: "+result);

          
        // }
        // else{
        //   console.log("resultat: "+result);
        // }

      })
      .catch(error => console.log('error', error));

  }
</script> -->



</body>
</html>
