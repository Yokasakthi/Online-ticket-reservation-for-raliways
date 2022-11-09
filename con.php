<0? php
     $name = $_POST['name'];
     $starting = $_POST['starting'];
     $end = $_POST['end'];
     $tr = $_POST['tr'];
     $tkt = $_POST['tkt'];
     $date = $_POST['date'];
     $time = $_POST['time'];

     //database connection
     $conn = new mysqli('localhost','root','','railway');
     if($conn->connect_error){
     	die('COnnection Failed :' .$conn->connect_error);
     }else{
     	$stmt = $conn->prepare("insert into railways(name, starting, end, tr, tkt, date, time)
     		  values(?,?,?,?,?,?,?)");
     	$stmt->bind_param("ssssiii",$name, $starting, $end, $tr, $tkt, $date, $time);
     	$stmt->execute();
     	echo "Registration sucessful...";
     	$stmt->close();
     	$conn->close();
     }
