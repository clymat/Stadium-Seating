<?php

   $title = "Log Out";
   include "secondary-header.php";
   session_destroy();
   header('Refresh: 2; URL = login.php');
   echo 'You logged out!!';
   ?>
   <section>
   <h1>Thank You.</h1>
   <p>To access any pages again please log in again.</p>
   </section>

   </body>
   </html>
