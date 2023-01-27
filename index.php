<?php
$url='';
if(isset($_GET['url']))
{
  $url=explode('/', $_GET['url']);
}
if($url== '')
{
  require 'pages/home.php';
}
else if ($url[0]== 'admin-dashborad')
{
  require 'admin/pages/home.php';
}
else if ($url[0]== 'home'){
  require 'client/pages/home.php';
}
else if ($url[0]== 'profil')
{
  require 'admin/pages/profil.php';
}
else if ($url[0]== 'update_service')
{
  require 'admin/pages/update_service.php';
}
else if ($url[0]== 'details_service')
{
  require 'admin/pages/details_service.php';
}
else if ($url[0]== 'forum_maint')
{
  require 'client/forums/forum_maint.php';
}
else if ($url[0]== 'forgot-password')
{
  require 'client/pages/forgot-password.php';
}
else if ($url[0]== 'reset_password') 
{
  require 'client/pages/reset_password.php';
}
else if ($url[0]== 'abonne') 
{
  require 'client/pages/abonne.php';
}
else if ($url[0]== 'assistance') 
{
  require 'client/pages/assistance.php';
}
else if ($url[0]== 'register') 
{
  require 'register.php';
}
else if ($url[0]== 'user') 
{
  require 'admin/pages/user.php';
}
else if ($url[0]== 'user-profile') 
{
  require 'client/pages/user.php';
}
else if ($url[0]== 'abonnement')
{
  require 'admin/pages/abonnement.php';
}
else if ($url[0]== 'historique_abonnement')
{
  require 'client/pages/historique_abonnement.php';
}
else if ($url[0]== 'commandes')
{
  require 'admin/pages/commandes.php';
}
else if ($url[0]== 'service')
{
  require 'admin/pages/service.php';
}
else if ($url[0]== 'notifications')
{
  require 'admin/pages/notifications.php';
}
else if ($url[0]== 'messagerie')
{
  require 'admin/pages/messagerie.php';
}
else if ($url[0]== 'messagerie-client')
{
  require 'client/pages/messagerie.php';
}
else if ($url[0]== 'edit_abonnement')
{
  require 'admin/pages/edit_abonnement.php';
}
else if ($url[0]== 'login')
{
  require 'login.php';
}
else if ($url[0]== 'user_details')
{
  require 'admin/pages/user_details.php';
}
else if ($url[0]== 'user_abonnements')
{
  require 'admin/pages/user_abonnements.php';
}
else if ($url[0]== 'user_services')
{
  require 'admin/pages/user_services.php';
}
else if ($url[0]== 'home-landing')
{
  require 'pages/home.php';
}
else if ($url[0]== 'privacy')
{
  require 'pages/privacy.php';
}
else if ($url[0]== 'contact')
{
  require 'pages/contact.php';
}
else
{
  require 'pages/404.php';
}



// client routes 
// to put outside: forgot-password, user

