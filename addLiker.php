<?php
    ob_start();
    $Cek = false;

    $Host = "localhost";
    $Username = "root";
    $Password = "";
    $DBname = "sesoul";

    //$Connect = new PDO("mysql:host=$Host;dbname=$DBname;", $Username, $Password);
    $Connect = new mysqli($Host, $Username, $Password, $DBname);

    if ($Connect->connect_error) 
    {
        die("Connection failed: " . $Connect->connect_error);
    }

    $ID = $_GET['id'];
    $Username = $_COOKIE['loggedin'];   
    //$Username = substr($Username, 3); // Ngambil id user dapet dari session. Kalo sessionnya CEH#username
    $Query = "SELECT `id` FROM `users` WHERE `username` = '$Username'";
    $Result = mysqli_query($Connect, $Query) or die($Connect);
    $DATA = $Result->fetch_assoc();
    $IDUser = $DATA['id'];

    $stmt = $Connect->prepare("SELECT `dilike` FROM `liked` WHERE `yangLike` = ?"); // Check udah pernah dilike atau belum
    $stmt->bind_param('s', $IDUser);
    $stmt->execute();
    $result = $stmt->get_result();

    while($Already = $result->fetch_assoc())
    {
        echo $Already['dilike'] .  "<br>";
        if($Already['dilike'] === $ID)
        {
            echo "Your Alerady Liked This People <br>";
            echo $Already['dilike'] .  "<br>";
            //header("Location: home.php");

            $Cek = true;
        }
    }

    if($Cek != true && $ID != $IDUser)
    {
        $stmt = $Connect->prepare("INSERT INTO `liked` (yangLike, dilike) VALUES (?, ?)");
        $stmt->bind_param('dd', $IDUser, $ID);
        $stmt->execute();
        $stmt->close();
    
		$matched = "SELECT id FROM liked WHERE yangLike =".$IDUser." AND dilike =".$ID." UNION SELECT id FROM liked WHERE dilike =".$IDUser." AND yangLike =".$ID;
		$resultmatched = $Connect->query($matched);
		
		if ($resultmatched->num_rows >1)
			{
				$newmatch = "INSERT INTO matched (user1, user2) VALUES (".$IDUser.",".$ID.")";
				$resultnewmatch = $Connect->query($newmatch);
			}
	
        //header("Location: home.php");
    
	}
	
	else
    {
        header("Location: home.php");
    }
	
    
?>