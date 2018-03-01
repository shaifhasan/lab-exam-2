<?php

if(isset($_POST['submit'])){
if(isset($_POST['name'])){
		$name=$_POST['name'];
	if (empty($_POST['name'])) {
    echo "*id is required";
    }
}
	
	if(isset($_POST['email'])){
		$email=$_POST['email'];
	if (empty($_POST['email'])) {
    echo "*pass is required";
     }
	}
	 if(isset($_POST['userName'])){
		$userName=$_POST['userName'];
	if (empty($_POST['userName'])) {
    echo "*username is required";
     }
	 }
	 
	if(isset($_POST['password'])){
		$pass=$_POST['password'];
	if (empty($_POST['password'])) {
    echo "*pass is required";
     }
	}

	if(isset($_POST['confirmPassword'])){
		$con=$_POST['confirmPassword'];
	if (empty($_POST['confirmPassword'])) {
    echo "*pass is required";
     }
	}
	if(isset($_POST['a'])){
		$cd=$_POST['a'];
	if (empty($_POST['a'])) {
    echo "*day is required";
     }
	}
	if(isset($_POST['b'])){
		$c=$_POST['b'];
	if (empty($_POST['b'])) {
    echo "*mounth is required";
     }
	}
	if(isset($_POST['c'])){
		$ca=$_POST['c'];
	if (empty($_POST['c'])) {
    echo "*year is required";
     }
	}
	if(isset($_POST['gender'])){
		$g=$_POST['gender'];
	if (empty($_POST['gender'])) {
    echo "*year is required";
     }
	}
	$da=$cd."-".$c."-".$ca;
	$conn = mysqli_connect("localhost","root", "", "m");
if(!$conn){
		die("Connection Error!".mysqli_connect_error());
	}
	$sql="insert into user values('$name','$email','$userName','$pass','$g','$da')";
	
	if(mysqli_query($conn, $sql)){
		echo "<br/> Data Inserted!";
	}else{
		echo "<br/> SQL Error".mysqli_error($conn);
	}
	}


?>

<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form action="#" method="POST">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
			<td>
					<input name="name" type="text">
					
				</td>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="userName" type="text">
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password">
					</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password">
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio" value="Male">Male
						<input name="gender" type="radio" value="Female">Female
						<input name="gender" type="radio" value="other">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" name="a" size="2"  />/
						<input type="text" name="b" size="2" />/
						<input type="text" name="c" size="4" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit">
		<input type="reset">
	</form>
</fieldset>