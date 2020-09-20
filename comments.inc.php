<?php

function setComments($conn){

	
	if(isset($_POST['commentSubmit'])){
		if(isset($_SESSION['id'])){
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "INSERT INTO comments (uid, date , message) VALUES ('$uid','$date','$message')";
		$result = $conn->query($sql);}
		else{
        echo"未登录！无法留言！";
		}
		
	}
	
}

function getComments($conn){
	$sql = "SELECT * FROM comments";
	$result = $conn-> query($sql);
	while($row = $result -> fetch_assoc()){
	echo"<div class = 'comment-box'>";
	echo $row['uid']."<br><br>";
	echo $row['date']."<br><br>";
	echo $row['message']."<br><br>";
	echo"</div>";
	}

}

function getLogin($conn){
    if(isset($_POST['loginSubmit'])){
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
	$sql = "SELECT * FROM user WHERE uid = '$uid' AND pwd = '$pwd'";
	$result = $conn-> query($sql);
	if(mysqli_num_rows($result) > 0){
	    if($row = $result -> fetch_assoc()){
	        $_SESSION['id'] = $row['id'];
	      echo"true";  
		  exit;
	    }
	}
	else{
	    echo "false";  
	    exit;
	}
    }

}

function userLogout(){
   if(isset($_POST['logoutSubmit'])){
    
    session_destroy();
     
   }
    

}