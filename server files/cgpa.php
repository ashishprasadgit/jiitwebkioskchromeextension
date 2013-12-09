<html>
    <head>
        <title> View SGPA/CGPA</title>
    </head>
    <body>
        <?php
        echo "<base href='https://webkiosk.jiit.ac.in/' >";
        session_start();
        if(isset($_SESSION['user']) && false){
            $cookie = $_SESSION['user'];
        }
        else{
            $username = $_POST['user'];
            $password = $_POST['pass'];
            $cookie = $username;
            $_SESSION['user'] = $username;
        connect($cookie,$username,$password);
        } 
        echo getStudentCGPA($cookie);
        ?>
    </body>
</html>



<?PHP
function connect($cookie,$username,$password){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://webkiosk.jiit.ac.in/CommonFiles/UserAction.jsp');
  curl_setopt($ch, CURLOPT_NOBODY, true);
  curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
  curl_setopt($ch, CURLOPT_HEADER, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "x=&txtInst=Institute&InstCode=JIIT&txtuType=Member+Type&UserType=S&txtCode=Enrollment+No&MemberCode=$username&DOB=DOB&DATE1=01%2F01%2F1999&txtPin=Password%2FPin&Password=$password&BTNSubmit=Submit");
  $output = curl_exec($ch);
  curl_close($ch);
  return $output;
}

function getStudentCGPA($cookie){
	$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://webkiosk.jiit.ac.in/StudentFiles/Exam/StudCGPAReport.jsp');
 curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output = curl_exec($ch);
  $start = stripos($output, "<body");
     $end = stripos($output, "</body");
	 $output = substr($output,$start,$end-$start);
  curl_close($ch);
  return $output;
}
?>