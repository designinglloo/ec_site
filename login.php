<html>
  <body>
    <?php
      session_start();
      unset($_SESSION['user_id']);
      unset($_SESSION['pass_incorrect']);
    $con=mysql_connect("localhost","***","***");
	  if (!$con){
          die('Could not connect: ' . mysql_error());
        }
	  mysql_select_db("akumarose_db",$con);
	  $result=mysql_query("SELECT * FROM id_pass where user_id='$_POST[login_id]'",$con);
	  $row=mysql_fetch_array($result);
	  $real_pass= $row['user_pass'];
	
      if($real_pass==$_POST['login_pass'] && $real_pass !=""){
        $_SESSION['user_id']=$_POST['login_id'];
      }else{
        $_SESSION['pass_incorrect']=1;
      }
      header('location:index2.php');
    ?>
  </body>
</html>



