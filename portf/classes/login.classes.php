<?php
 session_start();
class Login extends Dbh
{
    public function getUser($email, $password)
    {
        $sql = "SELECT email,password from regisztracio where email = :email;";
		$stmt = $this->connect()->prepare($sql);
		$params = ['email'=>$email];
		$stmt->execute($params);
		if($stmt->rowCount() > 0)
		{
			$getRow = $stmt->fetch(PDO::FETCH_ASSOC);
			if(password_verify($password, $getRow['password']))
			{
				unset($getRow['password']);
				$_SESSION = $getRow;
				header('location: ../login.php?error=login');
				exit();
			}
		    else
			{
                $stmt=null;
                $_SESSION['loginErr'] = "Rossz email vagy jelszó";
                header("location: ../login.php?error=wronglogin");
			}
		}
        else
        {
            $stmt=null;
            $_SESSION['loginErr'] = "Rossz email vagy jelszó";
            header("location: ../login.php?error=wronglogin");
        }
    }
}