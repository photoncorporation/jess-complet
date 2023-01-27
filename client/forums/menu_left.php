
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #18345D" ><!--  style="background-color:rgb(101,147,183);" -->
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
      <img src="dist/img/jess_logo.png" alt="admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text" style="font-weight: bold;color:white;">Jess</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="user" class="d-block" id="content-name">
            <i class="fa fa-user mx-3"></i>
            <p id="current-user"></p>
          </a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <!-- <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Utilisateurs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> -->
             <li class="nav-item">
                <a href="home" class="nav-link">
                  <i class="fa fa-home" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Accueil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user-profile" class="nav-link">
                  <i class="fa fa-user"style="color: white;"></i>  
                  <p style="margin-left:10px;color:white;">Profil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="assistance" class="nav-link">
                 <i class="fa fa-list" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Assistance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="abonne" class="nav-link">
                 <i class="fa fa-clone" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Abonnement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="historique_abonnement" class="nav-link">
                 <i class="fa fa-archive" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Historique</p>
                </a>
              </li>
            <li class="nav-item">
                <a onclick="logout()" class="nav-link">
                  <i class="fa fa-arrow-right" aria-hidden="true" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Deconnexion</p>
                </a>
              </li> 
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <script>
    function logout() {
      localStorage.removeItem("_currentUser");
      window.location.href = "login";
    }

    function getCurrentUser() {
      let currentUser = JSON.parse(localStorage.getItem("_currentUser"));
      console.log(currentUser,"local user");
      if (currentUser) {
        document.getElementById("current-user").innerHTML = currentUser.user.name || currentUser.user.email;
      } else {
        window.location.href = "login";
      }
    }
    window.addEventListener("DOMContentLoaded", getCurrentUser);
  </script>