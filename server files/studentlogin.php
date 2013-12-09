<html>
<head>    <title> JIIT Webkiosk </title>    <script type = "text/javascript">
        <?php
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
   $mycontent = " 
   function myformsubmission(){
   var enroll = document.getElementById('MemberCode');
    enroll.value='$username';    

    var password = document.getElementById('Password');
    password.value='$password';

    var form = document.getElementsByTagName('form')[0];
    form.submit();

   } ";
        echo $mycontent;          

?>



function forDate() {
var p = document.getElementById("UserType").value;
//alert(p);
if (p == 'S') {document.getElementById("mydiv1").style.display="block";
document.getElementById("mydiv2").style.display="block"}
else {document.getElementById("mydiv1").style.display="none";
document.getElementById("mydiv2").style.display="none";}
}
</script>

<script language="JavaScript" type ="text/javascript" src="https://webkiosk.jiit.ac.in/js/datetimepicker.js"></script>
<script type="text/javascript" src="https://webkiosk.jiit.ac.in/js/sortabletable.js"></script>
<script type="text/javascript" src="https://webkiosk.jiit.ac.in/sh/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="https://webkiosk.jiit.ac.in/sh/jquery.searchabledropdown-1.0.8.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Jaypee Institute of Information Technology University</title>


 
<SCRIPT ID=clientEventHandlersJS LANGUAGE=javascript>


function UserType_onchange()
{
	var mUserType;
	mUserType=LoginForm.UserType.value;
    if (mUserType == 'S')
	{
	   LoginForm.txtCode.value  ="Enrollment No";
	}
	else if (mUserType=='E')
	{
	   LoginForm.txtCode.value  ="Employee Code";
	}
	else
	{
	   LoginForm.txtCode.value  ="Guest ID";
	}
}

function MemberCode_onchange()
{
	var mUserCode;
	mUserCode=LoginForm.MemberCode.value;
	LoginForm.MemberCode.value = mUserCode.toUpperCase();
}

</SCRIPT>

</head>

<BODY  aLink=#ff00ff bgColor='#d6d2d6'  rightmargin=0 leftmargin=0 topmargin=0 bottommargin=0 onload="myformsubmission();">
      <form method=post action="https://webkiosk.jiit.ac.in/CommonFiles/UserAction.jsp" name="LoginForm">
<input type="hidden" name="x" id="x">
<table  bgcolor='#a43f06' align=center valign="middle" cellpadding=0 cellspacing=0 border=0 style="WIDTH: 680px; HEIGHT: 500px" rules="none">
<tr><td colspan=2 style="WIDTH: 742px; HEIGHT: 106px">
	<table  bgcolor='#a43f06' cellpadding=0 cellspacing=0 border=0 background="https://webkiosk.jiit.ac.in/Images/header.jpg"  style="WIDTH: 742px; HEIGHT: 106px">
		<tr><td>&nbsp;</td></tr>
	</table>
</td></tr>



<tr><td>
	<table  bgcolor='#a43f06' background='https://webkiosk.jiit.ac.in/Images/centre-left.jpg'  cellpadding=0 cellspacing=0 border=0 style="WIDTH: 430px; HEIGHT: 286px">
		<tr><td>&nbsp;</td></tr>
	</table>
</td>
<td>
	<table  bgcolor='#a43f06' align=cenetr background='https://webkiosk.jiit.ac.in/Images/centre-right.jpg' cellpadding=0 cellspacing=0 border=0 style="WIDTH: 312px; HEIGHT: 286px"  rules=none>

	<tr><td align=center>
<INPUT id=txtInst style="BORDER-BOTTOM: medium none; BORDER-LEFT-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-TOP-STYLE: none; FONT-FAMILY: sans-serif; FONT-SIZE: x-small; FONT-STYLE: normal; HEIGHT: 19px; TEXT-ALIGN: right; VERTICAL-ALIGN: middle; WIDTH: 99px" size=12 value="Institute" name=txtInst readOnly tabIndex=100 height="22" width="99" align=right>
      <select size="1" name="InstCode" tabindex="1" style="VERTICAL-ALIGN: middle; WIDTH: 99px">
      <OPTION Value="JIIT" selected>JIIT</OPTION>
      <OPTION Value="JPBS">JPBS</OPTION>
	   <OPTION Value="J128">J128</OPTION>
      </select>
	<FONT color=red><sub>*</sub></FONT><br>
	<INPUT id=txtUType style="BORDER-BOTTOM: medium none; BORDER-LEFT-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-TOP-STYLE: none; FONT-FAMILY: sans-serif; FONT-SIZE: x-small; FONT-STYLE: normal; HEIGHT: 19px; TEXT-ALIGN: right; VERTICAL-ALIGN: middle; WIDTH: 99px"
      size=12 value="Member Type" name=txtuType readOnly tabIndex=100 height="22" width="99" align=right>
	 
      <select size="1" name="UserType" id="UserType" tabindex="1" language="Javascript" onchange="UserType_onchange();"  onkeypress="return UserType_onchange();" style="VERTICAL-ALIGN: middle; WIDTH: 99px">
      <OPTION Value="S" >Students</OPTION><!---->
      <OPTION Value="E">Employee </OPTION>
      <OPTION Value="G">Guest </OPTION>
      </select>
	<FONT color=red><sub>*</sub></FONT><br>

 
    <INPUT Readonly name=txtCode value="Enrollment No" style ="BORDER-BOTTOM: medium none; BORDER-LEFT-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-TOP-STYLE: none; FONT-FAMILY: sans-serif; FONT-SIZE: x-small; FONT-STYLE: normal; HEIGHT: 22px; TEXT-ALIGN: right;
      VERTICAL-ALIGN: middle; WIDTH: 99px" size=12 lowsrc="" tabIndex=101 width="99" >
	<input name="MemberCode" id="MemberCode" size="11" tabindex="2" LANGUAGE=javascript onchange="MemberCode_onchange();" style="VERTICAL-ALIGN: middle; WIDTH: 99px"> <FONT color=red><sub>*</sub></FONT>
	<br>
	
	
	
&nbsp;&nbsp;&nbsp;&nbsp;<INPUT id=txtPIN style="BORDER-BOTTOM: medium none; BORDER-LEFT-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-TOP-STYLE: none; FONT-FAMILY: sans-serif; FONT-SIZE: x-small; FONT-STYLE: normal; HEIGHT: 19px; TEXT-ALIGN: right; VERTICAL-ALIGN: middle; WIDTH: 85px" size =15 name =txtPin readOnly value="Password/Pin" tabIndex=103 width="99">
<input type="password" name="Password"  id="Password" size="10" tabindex="4" style="HEIGHT: 22px; VERTICAL-ALIGN: middle; WIDTH: 99px"  onkeypress=" return Validate();"  >&nbsp;<font color="red"><sub>*</sub></font>
<INPUT id=BTNSubmit style="FONT-FAMILY: Arial; FONT-SIZE: x-small; HEIGHT: 25px; VERTICAL-ALIGN: top; WIDTH: 95px" tabIndex=5 type=submit size=30 value=Submit  name=BTNSubmit id="BTNSubmit" height="25"  onclick=" return Validation();"  ONsubmit="return valpass();"  >
<INPUT id=BTNReset style="FONT-FAMILY: Arial; FONT-SIZE: x-small; HEIGHT: 25px; VERTICAL-ALIGN: top; WIDTH: 94px" tabIndex=6 type=reset size=30 value=Reset name=BTNReset height="25">
      <BR> <BR>
        
    	</td></tr>
	</form>
	</table>
</td></tr>
</table>


</BODY>
</HTML>

