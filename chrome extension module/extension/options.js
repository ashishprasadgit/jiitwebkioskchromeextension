window.addEventListener('DOMContentLoaded', function() {
    var login = document.querySelector('input#login');
	var loginshow = document.querySelector('input#loginshow');
	var webkiosk = document.querySelector('input#webkiosk');
	var attendance = document.querySelector('input#attendance'); 
	var marks = document.querySelector('input#marks');
	var cgpa = document.querySelector('input#cgpa');
	
 loginshow.addEventListener('click', function() {
	document.getElementById("home").style.display="none";
	document.getElementById("login").style.display="block";
});

webkiosk.addEventListener('click', function() {
if (localStorage.getItem('user') != null){
	user = localStorage["user"];
	pass = localStorage["pass"];

if(user.length>4 && pass.length>2)
{var win = window.open();
win.document.write("<form action='http://jiitsimplified.com/webkiosk/studentlogin.php' method='post'> <input type='text' name='user' id='user' value='"+user+"' hidden><br><input type='password' name='pass' id='pass' value='"+pass+"' hidden></form> <script> var form =document.getElementsByTagName('form')[0]; form.submit(); </script>");
}

}else 
document.getElementById("homemessage").innerText="Please Update Your Credentials First";
});

attendance.addEventListener('click', function() {
if (localStorage.getItem('user') != null){
	user = localStorage["user"];
	pass = encodeURIComponent(localStorage["pass"]);

if(user.length>4 && pass.length>2)
{var win = window.open();
win.document.write("<form action='http://jiitsimplified.com/webkiosk/attendance.php' method='post'> <input type='text' name='user' id='user' value='"+user+"' hidden><br><input type='password' name='pass' id='pass' value='"+pass+"' hidden></form> <script> var form =document.getElementsByTagName('form')[0]; form.submit(); </script>");
}
}else 
document.getElementById("homemessage").innerText="Please Update Your Credentials First";
});

 cgpa.addEventListener('click', function() {
if (localStorage.getItem('user') != null){
	user = localStorage["user"];
	pass = encodeURIComponent(localStorage["pass"]);;

if(user.length>4 && pass.length>2)
{var win = window.open();
win.document.write("<form action='http://webkiosk.azurewebsites.net/cgpa.php' method='post'> <input type='text' name='user' id='user' value='"+user+"' hidden><br><input type='password' name='pass' id='pass' value='"+pass+"' hidden></form> <script> var form =document.getElementsByTagName('form')[0]; form.submit(); </script>");
}
}else 
document.getElementById("homemessage").innerText="Please Update Your Credentials First";
});

 marks.addEventListener('click', function() {
if (localStorage.getItem('user') != null){
	user = localStorage["user"];
	pass = encodeURIComponent(localStorage["pass"]);;

if(user.length>4 && pass.length>2)
{var win = window.open();
win.document.write("<form action='http://jiitsimplified.com/webkiosk/marks.php' method='post'> <input type='text' name='user' id='user' value='"+user+"' hidden><br><input type='password' name='pass' id='pass' value='"+pass+"' hidden></form> <script> var form =document.getElementsByTagName('form')[0]; form.submit(); </script>");
}
}else 
document.getElementById("homemessage").innerText="Please Update Your Credentials First";
});

    login.addEventListener('click', function() {
		var user = document.getElementById('user').value;
		var pass = document.getElementById('pass').value;
		document.getElementById('pass').value="";
		if(user.length <4)
			{document.getElementById("loginmessage").innerText="Invalid Username"; return false; }
		else if (pass.length<2)
			{document.getElementById("loginmessage").innerText="Invalid Password"; return false; }
			
			localStorage["user"] = user;
			localStorage["pass"] = pass;
		
	document.getElementById("home").style.display="block";
	document.getElementById("login").style.display="none";
	document.getElementById("loginmessage").innerText="";
	document.getElementById("homemessage").innerText="";
});
});
/*	*/