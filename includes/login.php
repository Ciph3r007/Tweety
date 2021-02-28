<?php
	if(isset($_POST['login']) && !empty($_POST['login'])){
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];

		if(!empty($email) or !empty($password)){
			$email 		= $getFromU->checkInput($email);
			$password 	= $getFromU->checkInput($password);

			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$error = "Invalid Format!";
			}
			else{
				if($getFromU->login($email, $password) === false){
					$error = "The email or password is incorrect!";
				}
			}
		}else{
			$error = "Please enter email and password!";
		}
	}
?>

<div class="login-div">
<form method="post"> 
	<ul>
		<li>
		  <input type="text" name="email" placeholder="Please enter your Email here"/>
		</li>
		<li>
		  <input type="password" name="password" placeholder="password"/><input type="submit" name="login" value="Log in"/>
		</li>
		<li>
		  <input type="checkbox" Value="Remember me">Remember me
		</li>
		<?php
			if(isset($error)){
				echo ' <li class="error-li">
	  				<div class="span-fp-error">'.$error.'</div>
	 				</li> ';
			}
		?>
	</ul>
	</form>
</div>