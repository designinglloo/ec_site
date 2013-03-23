<?php
  session_id(SID);           //session begins
  session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <title>
    AkumaRose
  </title>
  <script language=JavaScript><!--
    <!--FUNCTION TO OPEN SERIES.HTML FROM 'SERIES' added by jiao-->
    function openseries(series_name){
      series_path="/series/"+series_name+"/";
      strhtml="";
      for(i=1;i<=8;i=i+1){
        strhtml=strhtml + "<img onclick='openproduct("+"\""+series_name+"_"+i+"\""+");' width=20% height=8% style='margin-bottom:5px;' scrolling='no' src="+series_path+series_name+"_"+i+"/"+series_name+"_"+i+".jpg></img><iframe height=8% style='margin-left:5px;border-width:0;' src="+series_path+series_name+"_"+i+"/"+series_name+"_"+i+"_title_sc.txt></iframe>" + "<br>";
      }
      document.getElementById("change_item").innerHTML=strhtml;
    }
    function openproduct(product_num){
      //take care of the "" and ''(use '' outside and "" inside); check spaces if buttons shows incorrectly;
      //here to edit html of PRODUCT information 
      document.getElementById("change_item").innerHTML='<form name="product_form"><img width="40%" src="/series/shangpintu/' + product_num + '/' + product_num + '.jpg"></img><iframe frameborder=0 scrolling=0 width="50%" src="/series/shangpintu/' + product_num + '/' + product_num + '_information_sc.txt"></iframe><br><br><div style="background-color:#efab93;width=100%;padding-top:10px;margin-bottom:0;margin-top:10px;margin-left:0;color:#fef4f4;"><input type="checkbox">&#25918;&#20837;&#36141;&#29289;&#36710;  </input><input type="button" id="jiekuan" onmouseover=mouseoveroflogin("jiekuan"); onmouseout=mouseoutoflogin("jiekuan"); class="login_button_style" value=&#32467;&#31639;> </input><input type="button" id="jixugouwu" onmouseover=mouseoveroflogin("jixugouwu"); onmouseout=mouseoutoflogin("jixugouwu"); class="login_button_style" value=&#32487;&#32493;&#36141;&#29289;></input></div><br><br><iframe frameborder=0 scrolling=0 width="100%" src="/series/shangpintu/' + product_num + '/' + product_num + '_sc.txt"></iframe></form>';
    }
    function mouseover(element_name){
      document.getElementById(element_name).className="button_mouse_moving_on";
      document.getElementById(element_name).style.cursor="pointer";
    }
    function mouseout(element_name){
      document.getElementById(element_name).className="button_style";
    }
    function mouseoveroffinditem(element_name){
      document.getElementById(element_name).className="find_item_button_mouse_moving_on";
      document.getElementById(element_name).style.cursor="pointer";
    }
    function mouseoutoffinditem(element_name){
      document.getElementById(element_name).className="find_item_button_style";
    }
    function mouseoveroflogin(element_name){
      document.getElementById(element_name).className="login_button_mouse_moving_on";
      document.getElementById(element_name).style.cursor="pointer";
    }
    function mouseoutoflogin(element_name){
      document.getElementById(element_name).className="login_button_style";
    }
	function check_register_infor(){
	  str_user_id=document.getElementById("user_id_text").value;
	  str_user_email=document.getElementById("user_email_text").value;
	  str_user_email_config=document.getElementById("user_email_text_config").value;
	  str_user_pass=document.getElementById("user_pass_text").value;
	  str_user_pass_config=document.getElementById("user_pass_text_config").value;
	  
	  if(str_user_id==0 || str_user_email==0 || str_user_email_config==0 || str_user_pass==0 || str_user_pass_config==0){
	    document.getElementById("register_warning").innerHTML="&#21508;&#39033;&#19981;&#33021;&#20026;&#31354;";
		return false;
      }
	  
	  if (str_user_id.length>6){ //check whether the len of user_id is larger than 6
	    if (str_user_email == str_user_email_config){ //check whether the user_email equals user_email_config
		  if(str_user_pass.length>6){ //check whether the len of user_pass is larger than 6
		    if (str_user_pass == str_user_pass_config){ // check whether user_pass equals user_pass_config
			  return true;
			}
			else{
			  document.getElementById("register_warning").innerHTML="&#23494;&#30721;&#19981;&#19968;&#33268;";
			  return false;
			}
		  }
		  else{
		    document.getElementById("register_warning").innerHTML="&#23494;&#30721;&#36807;&#30701;";
			return false;
		  }
		}
		else{
		  document.getElementById("register_warning").innerHTML="&#37038;&#31665;&#22320;&#22336;&#19981;&#19968;&#33268;";
		  return false;
		}
	  }
	  else{
	    document.getElementById("register_warning").innerHTML="&#26165;&#31216;&#36807;&#30701;";
	    return false;
	  }
	}
	function register_id(){
	  document.getElementById("change_item").innerHTML='<div style="background-color:#f5b1aa;color:#fef4f4;padding:20px;"><form id="id_register" method=post action="register.php" onsubmit="return check_register_infor();">&#26165;&#31216;:<input type=text id="user_id_text" name="user_id_text" style="background-color:#fef4f4;border-width:0;margin-bottom:10px;"></input>(&#33521;&#23383;&#27597;/&#25968;&#23383;6&#23383;&#33410;&#20197;&#19978;&#65292;&#35831;&#20197;&#33521;&#23383;&#27597;&#24320;&#22836;)<br>&#37038;&#31665;:<input type=text id="user_email_text" name="user_email_text" style="background-color:#fef4f4;border-width:0;margin-bottom:5px;"></input>(&#35831;&#36755;&#20837;&#27491;&#30830;&#30340;&#37038;&#31665;&#22320;&#22336;)<br>&#37038;&#31665;:<input type=text id="user_email_text_config" style="background-color:#fef4f4;border-width:0;margin-bottom:5px;"></input>(&#20877;&#27425;&#36755;&#20837;&#65292;&#20197;&#20316;&#30830;&#35748;)<br><br>&#23494;&#30721;:<input type=password id="user_pass_text" name="user_pass_text" style="background-color:#fef4f4;border-width:0;margin-bottom:5px;"></input>(&#33521;&#23383;&#27597;/&#25968;&#23383;6&#23383;&#33410;&#20197;&#19978;)<br>&#23494;&#30721;:<input type=password id="user_pass_text_config" style="background-color:#fef4f4;border-width:0;margin-bottom:5px;"></input>(&#20877;&#27425;&#36755;&#20837;&#65292;&#20197;&#20316;&#30830;&#35748;)<br><br><input type=submit id="register_submit" onmouseover=mouseoveroflogin("register_submit"); onmouseout=mouseoutoflogin("register_submit"); class="login_button_style" style="width:15%;" value=&#25552;&#20132;></input><div id="register_warning"></div></form></div>';
	}
  //--></script>
  <link rel="stylesheet" type="text/css" href="/necessary/sitestyle.css" /> 
</head>
<body bgcolor=#fef4f4 onunload="session.clear();">

<table width="75%" align="center" bgcolor="#fdeff2" 
  <tr align="right">
    <td width="25%" align="left">
      <a href="index.html">&#36820;&#22238;&#20027;&#39029;</html>
    </td>
    <td align="right" width="75%">
      <!--LANGUAGE added by jiao-->
      <a href="index5.php">English</a>
      <a href="index2.php">  &#20013;&#25991;&#31616;&#20307;</a>
      <a href="index3.php">  &#32321;&#39636;&#20013;&#25991;</a>
      <a href="index4.php">  &#26085;&#26412;&#35486;</a>
    </td>
  </tr>
  <tr>
    <td width="25%"></td>
    <td align="middle">
      <!--TITLE OF THE SITE(SHOULD BE A PICTURE) added by jiao-->
      <font size=7 >AkumaRose</font>
    </td>
  </tr>
  <tr>
    <td valign="top" width="25%">
	  <!--LOGGINFORM added by jiao-->
      <?php
        if(isset($_SESSION['user_id'])){  //when password is correct
          echo '
          <form name="log_out" action="logout.php" method="post" style="background-color:#efab93;margin-bottom:0;">
            <font style="color:#fef4f4;margin-left:10px;">Welcome!&nbsp;&nbsp;'.$_SESSION['user_id'].'</font><br>
            <input type="submit" id="logout" onmouseover=mouseoveroflogin("logout"); onmouseout=mouseoutoflogin("logout"); class="login_button_style" style="margin-top:5px;margin-left:10px;" value=&#30331;&#20986;>
          </form>'; //logout button and (mypage button)
        }
        else{
          if (isset($_SESSION['pass_incorrect'])){
		    echo "id or password incorrect";
			unset($_SESSION['pass_incorrect']);
		  }  //when password is not correct
          echo "
            <form name='log_in' action='login.php' method='post' style='background-color:#efab93;color:#fef4f4;margin-bottom:0;padding-left:10px;'>
              <br>
              &#26165;&nbsp;&nbsp;&#31216;: <input type='text' id='login_id'  name='login_id' style='background-color:#fef4f4;border-width:0;width:50%;margin-bottom:5px;'>
              &#23494;&nbsp;&nbsp;&#30721;: <input type='password' id='login_pass'  name='login_pass' style='background-color:#fef4f4;border-width:0;width:50%;margin-bottom:10px;'> <br>
              <input type='submit' id='login' onmouseover=mouseoveroflogin('login'); onmouseout=mouseoutoflogin('login'); class='login_button_style' value=&#30331;&#24405;>
              <input type='button' id='signin' onclick='register_id();' onmouseover=mouseoveroflogin('signin'); onmouseout=mouseoutoflogin('signin') class='login_button_style' value=&#27880;&#20876;>
              <br>
            </form>
          ";
        }
      ?>
	  <!--LOGGINFORM END added by jiao-->
      <hr style="margin-top:0;"></hr>
      <!--SERIESFORM added by jiao-->
      <form name="series" style="margin-bottom:0;">
        <input type=button onclick="openseries('baoshiruangao');" id="baoshiruangao" onmouseover="mouseover('baoshiruangao');" onmouseout="mouseout('baoshiruangao');" class="button_style" value=&#20445;&#28287;&#36719;&#33167;><br>
        <input type=button onclick="openseries('mianmo');" id="mianmo"  onmouseover="mouseover('mianmo');" onmouseout="mouseout('mianmo');" class="button_style" value=&#38754;&#32;&#32;&#32;&#32;&#32;&#32;&#33180;><br>
        <input type=button onclick="openseries('tesepinpai');" id="tesepinpai"  onmouseover="mouseover('tesepinpai');" onmouseout="mouseout('tesepinpai');" class="button_style" value=&#29305;&#33394;&#21697;&#29260;><br>
        <input type=button onclick="openseries('chumao');" id="chumao"  onmouseover="mouseover('chumao');" onmouseout="mouseout('chumao');"class="button_style" value=&#38500;&#32;&#32;&#32;&#32;&#32;&#32;&#27611;><br>
        <input type=button onclick="openseries('shangpintu');" id="shangpintu"  onmouseover="mouseover('shangpintu');" onmouseout="mouseout('shangpintu');" class="button_style" value=&#21830;&#32;&#32;&#21697;&#32;&#32;&#22270;><br>
        <input type=button onclick="openseries('yexiadian');" id="yexiadian"  onmouseover="mouseover('yexiadian');" onmouseout="mouseout('yexiadian');"class="button_style" value=&#33099;&#32;&#32;&#19979;&#32;&#32;&#22443;><br>
        <input type=button onclick="openseries('hushoushuang');" id="hushoushuang"  onmouseover="mouseover('hushoushuang');" onmouseout="mouseout('hushoushuang');" class="button_style" value=&#25252;&#32;&#32;&#25163;&#32;&#32;&#38684;><br>
        <input type=button onclick="openseries('huchungao');" id="huchungao"  onmouseover="mouseover('huchungao');" onmouseout="mouseout('huchungao');" class="button_style" value=&#25252;&#32;&#32;&#21767;&#32;&#32;&#33167;><br>
      </form>
      <!--SERIESFORM END added by jiao-->
      <hr style="margin-top:0;"></hr>
      <!--FIND_ITEM FORM (FIND_ITEM.HTML) added by jiao-->
      <form name="find_item" style="background-color:#efab93;margin-bottom:0; padding-left:10px;padding-bottom:10px;">
        <input type="text" style="position:relative;background-color:#fef4f4;border-width:0;width:50%;">
        <input type="button" id="lookforitem" onmouseover="mouseoveroffinditem('lookforitem');" onmouseout="mouseoutoffinditem('lookforitem');" value=&#25628;&#32034; class="find_item_button_style">
      </form>
      <!--FIND_ITEM FORM END added by jiao-->
      <hr style="margin-top:0;"></hr>
      <!--INFORMATION FORM TO PUT IN INFORMATION FROM 'INFORMATION' added by jiao-->
      <form name="information" style="background-color:#ee827c;height:920px;width=100%;margin-bottom:0;padding-top:10px;">
        <a href="http://japaneseproducthere.sitemix.jp/blog/" style="cursor:pointer;margin-left:15%;color:#fef4f4;" >&#25105;&#20204;&#30340;&#21338;&#23458;</a>
        <br>
        <a style="cursor:pointer;margin-left:15%;color:#fef4f4;">&#20154;&#20154;&#20844;&#20849;&#20027;&#39029;</a>
        <br>
        <a style="cursor:pointer;margin-left:15%;color:#fef4f4;">facebook&#20844;&#20849;&#20027;&#39029;</a>
        <br>
        <a style="cursor:pointer;margin-left:15%;color:#fef4f4;">twitter</a>
        <br>
      </form>
      <!--INFORMATION FORM END added by jiao-->
    </td>
    <td id="change_item" valign="top" width="75%">
	  <?php
	    if(isset($_SESSION['submit_succeed'])){
		  if($_SESSION['submit_succeed']==1){
		    echo '&#27880;&#20876;&#25104;&#21151;!';
		  }
		  else if ($_SESSION['submit_succeed']==0){
		    echo '&#27880;&#20876;&#19981;&#25104;&#21151;&#65292;&#35831;&#31245;&#21518;&#20877;&#27425;&#27880;&#20876;&#12290;&#12290;&#12290;';
		  }
		  else if($_SESSION['submit_succeed']==2){
		    echo '&#29992;&#25143;&#21517;&#24050;&#34987;&#20182;&#20154;&#27880;&#20876; :(<br>';
			echo "<input type='button' id='signin_again' onclick='register_id();' onmouseover=mouseoveroflogin('signin_again'); onmouseout=mouseoutoflogin('signin_again') class='login_button_style' value=&#20877;&#27425;&#27880;&#20876;>";
		  }
		  unset($_SESSION['submit_succeed']);
		}
		else{//take care of the dealing with "" and ''
		  echo'
            <!--PICTURES (FROM "PICTURES")added by jiao-->  
            <img onclick="openproduct('.'\''.'baoshiruangao_1'.'\''.');" src="/pictures/1.jpg" width="90%"></img><br>
            <img src="/pictures/2.jpg" width=30%></img>
            <img src="/pictures/3.jpg" width=30%></img><br><br>
            <img src="/pictures/4.jpg" width=30%></img>
            <img src="/pictures/5.jpg" width=30%></img>
            <img src="/pictures/6.jpg" width=30%></img><br><br>
            <img src="/pictures/7.jpg" width=30%></img>
            <img src="/pictures/8.jpg" width=30%></img><br><br>
            <img src="/pictures/9.jpg" width=30%></img>
            <img src="/pictures/10.jpg" width=30%></img>
            <img src="/pictures/11.jpg" width=30%></img><br><br>
            <!--PICTURES END added by jiao-->';
		}
	  ?>
    </td>
  </tr>
  <tr>
    <hr></hr>
  </tr>
</table>
</body>
</html>
