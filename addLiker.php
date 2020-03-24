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
    $Username = $_COOKIE['SID'];   
    $Username = substr($Username, 3); // Ngambil id user dapet dari session. Kalo sessionnya CEH#username
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
        $Query = "SELECT `id` FROM `liked` ORDER BY `id` DESC LIMIT 1";
        $Result = mysqli_query($Connect, $Query) or die($Connect);
        $DATA = $Result->fetch_assoc();
    
        $Last = $DATA['id'];
    
        $LastIDINT = (int)$Last + 1;
        $LastID = (string)$LastIDINT;
    
        echo $LastID . "<br>";
        echo $IDUser . "<br>";
        echo $ID . "<br>";
    
        $stmt = $Connect->prepare("INSERT INTO `liked` (id, yangLike, dilike) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $LastID, $IDUser, $ID);
        $stmt->execute();
        $stmt->close();
    
        header("Location: home.php");
    }
    else
    {
        header("Location: home.php");
    }
?>