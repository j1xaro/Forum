<?php
session_start();
require_once('Facebook/autoload.php');

$FBObject = new \Facebook\Facebook([
	'app_id' => '1028209790858963',
	'app_secret' => '8a3d0dcafbdfd832e55164bcf24e79b8',
	'default_graph_version' => 'v4.0'
]);

$handler = $FBObject -> getRedirectLoginHelper();


try {
    $accessToken = $handler->getAccessToken();
}catch(\Facebook\Exceptions\FacebookResponseException $e){
    echo "Response Exception: " . $e->getMessage();
    exit();
}catch(\Facebook\Exceptions\FacebookSDKException $e){
    echo "SDK Exception: " . $e->getMessage();
    exit();
}

if(!$accessToken){
    header('Location: login.php');
    exit();
}

$oAuth2Client = $FBObject->getOAuth2Client();
if(!$accessToken->isLongLived())
    $accessToken = $oAuth2Client->getLongLivedAccesToken($accessToken);

    $response = $FBObject->get("/me?fields=id, first_name, last_name, email, picture.type(large)", $accessToken);
    $userData = $response->getGraphNode()->asArray();
    $_SESSION['userData'] = $userData;
    $_SESSION['access_token'] = (string) $accessToken;
    $_SESSION['fb']= "facebook";

    if (isset($_SESSION['fb']))
 {
	// echo "fb";
	 $a = 0;
	 $results= $_SESSION['userData'];
	 foreach ($results as $result) 
	 {
		if($a==1)
		{
			$ime = $result;
		}
		else if ($a==2)
		{
			$priimek= $result;
		}
		else if ($a==3)
		{
			$email = $result;
		}
	$a++;
			
	
	}
	
	 session_destroy();
	 session_start();
/*	echo "Name ".$name." ";
	echo "<br>";
	echo "Surname ".$surname." ";
	echo "<br>";
	echo "Email ".$email." ";
	echo "<br>";*/

		$tip = 1;
		$geslo = "facebook";
		$username=$ime.$priimek;
		
			
			$sql= sprintf("SELECT email FROM uporabniki WHERE email='%s';", $email);
		
				$result= mysqli_query($link, $sql);
		
		
			$row = mysqli_fetch_array($result);
			
		
			if($row == NULL)
			{
					
			
					/* $sql = "INSERT INTO uporabniki (ime,priimek,email,geslo,uporabnisko_ime,tip)
						VALUES (NULL,'$ime', '$priimek', '$email', '$geslo', '$username', '$tip')";*/
						
						$sql= sprintf("INSERT INTO uporabniki (ime,priimek,email,pass)
									VALUES ( '%s', '%s', '%s', '%s');", $ime, $priimek, $email, $geslo);
					if(mysqli_query($link, $sql))
					{
						header("Location:index.php");
						//echo "Registracija uspela";
						
					}
					else 
						{
						echo ("<script LANGUAGE='JavaScript'>
						window.alert('Registacija ni uspela poskusite pozneje');
						window.location.href='login.php';
						</script>");   
						//echo "Registracija ni uspešna";
					}
				
			
		}
		else
		{
			$sql= sprintf("SELECT id,ime,priimek,tip_uporabnika_id,id,email,geslo FROM uporabniki WHERE email='%s';", $email);
		
				$result= mysqli_query($link, $sql);
		
		
			$row = mysqli_fetch_array($result);
			;
			$geslo2 = $row['geslo'];
			$_SESSION['ime']=$row['ime'];
      		$_SESSION['priimek']=$row['priimek'];
       		$_SESSION['tip']=$row['tip_uporabnika_id'];
			$_SESSION['id']=$row['id'];
			
			if($geslo2 == 'facebook')
			{
				
				header("Location:site.php");
				
			}
			else{
				echo ("<script LANGUAGE='JavaScript'>
				window.alert('Napaka pri prijavi');
				window.location.href='login.php';
				</script>");   
			}
        }
        
    header('Location:index.php');
	exit();
 }
?>