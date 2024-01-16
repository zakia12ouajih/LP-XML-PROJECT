<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {

   case '/LP-XML-PROJECT/public/':
      require dirname(__DIR__) . '/public/pages/Home.php';
      break;
   

   case '/LP-XML-PROJECT/public/home':
      require dirname(__DIR__) . '/public/pages/Home.php';
      break;

   case '/LP-XML-PROJECT/public/xmlData':
      require dirname(__DIR__) . '/public/pages/data.php';
      break;

   // case '/LP-XML-PROJECT/public/register':
   //    require dirname(__DIR__) . '/public/pages/registerForm.php';
   //    break;   

   // case '/LP-XML-PROJECT/public/register-process':
   //       require dirname(__DIR__) . '/src/register.php';
   //       break;

   case '/LP-XML-PROJECT/public/login':
         require dirname(__DIR__) . '/public/pages/loginForm.php';
         break;

   case '/LP-XML-PROJECT/public/login-process':
         require dirname(__DIR__) . '/src/login.php';
         break;

   case '/LP-XML-PROJECT/public/logout':
         require dirname(__DIR__) . '/src/logout.php';
         break;
   
      case '/LP-XML-PROJECT/public/admin/homeAdmin':
         require dirname(__DIR__) . '/public/pages/admin/homeAdmin.php';
         break;
      
      case '/LP-XML-PROJECT/public/directeur-adjoint/homeAD':
         require dirname(__DIR__) . '/public/pages/directeur-adjoint/homeDA.php';
         break;

      case '/LP-XML-PROJECT/public/admin/homeAdmin/administration':
      require dirname(__DIR__) . '/public/pages/data.php';
      break;

      case '/LP-XML-PROJECT/public/condidat/homecondidat':
         require dirname(__DIR__) . '/public/pages/condidat/homecondidat.php';
         break;

   default:
      http_response_code(404);
      require dirname(__DIR__) . '/public/pages/404.php';
      break;
}
