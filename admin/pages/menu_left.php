<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #18345D" ><!--  style="background-color:rgb(101,147,183);" -->
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
      <img src="dist/img/jess_logo.png" alt="admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text" style="font-weight: bold;color:white;">Jess Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
       <div class="info">
          <a href="profil" class="d-flex">
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
                <a href="admin-dashborad" class="nav-link">
                  <i class="fas fa-home" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Accueil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user" class="nav-link">
                  <i class="fas fa-users"style="color: white;"></i>  
                  <p style="margin-left:10px;color:white;">Utilisateurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="service" class="nav-link">
                  <i class="fas fa-home"style="color: white;"></i>  
                  <p style="margin-left:10px;color:white;">Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="commandes" class="nav-link">
                 <i class="fas fa-list" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Commandes</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="abonnement" class="nav-link">
                 <i class="fa fa-clone" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Abonnement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="notifications" class="nav-link">
                 <i class="far fa-comments" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Chat</p>
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
      if ((currentUser && currentUser.user.role == "admin" || currentUser.user.role == "admin") && currentUser.user.is_active) {
        document.getElementById("current-user").innerHTML = currentUser.user.name || currentUser.user.email;
      } else {
        window.location.href = "login";
      }
    }
    window.addEventListener("DOMContentLoaded", getCurrentUser);
  </script>