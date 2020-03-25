<?php
    include 'db.php';

    $cookie_name = "loggedin";
    $cookie_stats = "status";

    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$conn){
        die("Database connection failed: ".mysqli_connect_error());
    }

    if(isset($_POST['login'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$user' AND password='$pass'";

        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            $cookie_value = $user;
            setcookie($cookie_name, $cookie_value, time() + (7200), "/");
            header("Location: home.php");
        }else{
            echo "Username or password is incorrect!";
        }
    }
    else if(isset($_POST['register'])){
        if($_POST['password']==$_POST['repass']){
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			$nama=$_POST['nama'];
			$umur=$_POST['umur'];
			$lokasi=$_POST['lokasi'];
			$foto=$_FILES['avatar']['name'];

			if(preg_match("!image!", $_FILES['avatar']['type'])){

				if(copy($_FILES['avatar']['tmp_name'],$foto)){

					$_SESSION['username']=$username;
					$_SESSION['avatar']=$foto;

					$sql="INSERT INTO users(id,username,password,nama,umur,lokasi,foto)
					VALUES('$id','$username','$password','$nama','$umur','$lokasi','$foto')";
					
					if(mysqli_query($conn,$sql)){
						$_SESSION['message']="Registration Successful!";
						echo '<script language="javascript">';
						echo 'alert("Registration Successful!")';
						echo '</script>';
						header("location:index.php");
					}
					else{
						$_SESSION['message']="Database Error! Could not enter the information";
					}
				}
				else{
					$_SESSION['message']="File upload failed!";
				}

			}
			else{
				$_SESSION['message']="Please upload only JPG, PNG or GIF image!";
			}

		}
		else{
			$_SESSION['message']="Password did not match!";
		}
    }
?>