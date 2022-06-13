<?php 
      if(isset($_POST['submit']))
      {
            $user = $_POST['user'];
            setcookie("usuario", $user , time()+ 3600*24*365);
      }

        header("Location: index.php");

?>