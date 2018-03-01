<?php

if(isset($_COOKIE["re"]))
{
	header("location:admin_home.html");
}
else{
	if(isset($_POST['submit'])){

     	$id=trim($_POST['u']);
	   	$pass=trim($_POST['p']);
		$conn = mysqli_connect("localhost","root", "", "m");
if(!$conn){
		die("Connection Error!".mysqli_connect_error());
	}
	$sql="select User,Pass from user where User=$id";
	
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
echo $row['Pass'];
if($row['Pass']==$pass)
{
	if($row['user']=="admin"){
		if(isset($_POST['c']))
		{
			 setcookie("re","r",time()+(85400*2),"/"); 
		}
	header("location:admin_home.html");

}
    else if($p=="user")
    	header("location:user_home.html");
}
else
    echo "login fail";


}
}
	
	

?>

<fieldset>
    <legend><b>LOGIN</b></legend>
    <form>
        <table>
            <tr>
                <td>User Name</td>
				<td>:</td>
                <td><input type="text" name="u">
			<?php	if(isset($_POST['name'])){
		
	if (empty($_POST['u'])) {
    echo "*user is required";
    }
	?></td>
            </tr>
            <tr>
                <td>Password</td>
				<td>:</td>
                <td><input type="password" name="p">
				<?php	if(isset($_POST['p'])){
		
	if (empty($_POST['p'])) {
    echo "*pass is required";
    }
	?></td>
            </tr>
        </table>
        <hr />
		<input name="remember"  type="checkbox">Remember Me
		<br/><br/>
        <input type="submit" name="submit" value="Submit">        
		<a href="forgot_password.html">Forgot Password?</a>
    </form>
</fieldset>