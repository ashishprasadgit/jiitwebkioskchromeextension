<html>
    <head>
        <title> My Attendance</title>
    </head>
    <body>
        <?php
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
        $attendance =  getStudentAttendance($cookie);

        include_once("simple_html_dom.php");
        $html = str_get_html($attendance);
       // echo $html;
       echo "<html><body bgcolor='#fce9c5'>";
     
        echo "<br>";
        $head = $html->find('table');

        echo $head[0]; echo "<br>";
        //Display Student Details
            $cols = $head[1]->find('td');
            echo '<table width="100%" rules="groups" cellspacing="1" cellpadding="1" align="center" border="1">  <tbody>';
           echo ' <tr><td>'.$cols[0].'</td><td>'.$cols[1].'</td><td>'.$cols[2].'</td></tr></tbody></table><br>';
        //Display Student Details

      //  echo $head[2];
         echo '<table align="center" rules="Rows" class="sort-table" id="table-1" cellspacing="1" cellpadding="1" width="98%" border="1">  ';
         $thead = $head[2]->find('thead');
         echo $thead[0];

         $rows = $head[2]->find('tr');
         echo "<tbody>";
         $count = count($rows);
         for($i=1;$i<$count;$i++){
            $cols = $rows[$i]->find('td');
         echo "<tr> ".$cols[0].$cols[1]."<td>".$cols[2]->plaintext."</td>"."<td>".$cols[3]->plaintext."</td>"."<td>".$cols[4]->plaintext."</td>"."<td>".$cols[5]->plaintext."</td></tr>";
         }
         echo "</tbody></table></body></html>";
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

function getStudentAttendance($cookie){
	$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://webkiosk.jiit.ac.in/StudentFiles/Academic/StudentAttendanceList.jsp');
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