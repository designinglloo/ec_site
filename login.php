<html>
  <body>
    <?php
      session_start();
      //unset($_SESSION['user_id']);
      //unset($_SESSION['pass_incorrect']);
      //connect the database
      $pass_correct=1;         //$pass_correct to record whether the password & 

id are correct
      if($pass_correct==1){
        $_SESSION['user_id']='oneguest';
      }else{
        $_SESSION['pass_incorrect']=1;
      }
      header('location:http://japaneseproducthere.sitemix.jp/index2.php');
    ?>
  </body>
</html>
