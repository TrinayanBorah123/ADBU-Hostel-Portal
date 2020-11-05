<?php
 session_start();
 //session_unset();
// session_destroy();
  $_SESSION["login_user"] =""; 
 echo '<script>window.location.href = "studentlogin.php";</script>';
 
?>
<!-- <script>
            window.addEventListener( "pageshow", function ( event ) {
              var historyTraversal = event.persisted || 
                                     ( typeof window.performance != "undefined" && 
                                          window.performance.navigation.type === 2 );
              if ( historyTraversal ) {
                // Handle page restore.
                window.location.reload();
              }
            });
            </script> 
