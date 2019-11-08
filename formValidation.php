<?php include "inc/header.php";?>
<?php echo"Ajax Post Method";?><hr/>

<script>
$(document).ready(function(){


});

<!--custom function-->
$(function(){
	$("#username_error_msg").hide();
	$("#password_error_msg").hide();
	$("#password_again_error_msg").hide();
	$("#email_error_msg").hide();
	
	var error_username = false;
	var error_password = false;
	var error_password_again = false;
	var error_email = false;
	
	$("#username").focusout(function(){
		check_username();
	});
	$("#password").focusout(function(){
		check_password();
	});
	$("#password_again").focusout(function(){
		check_value_password();
	});
	$("#email").focusout(function(){
		check_email();
	});
	
	function check_username(){
		var username_length = $("#username").val().length;
		if(username_length < 5 || username_length > 20){
			$("#username_error_msg").html("Should be between 5-20 characters");
			$("#username_error_msg").show();
			error_username = true;
		}else{
			$("#username_error_msg").hide();
		}
	}
	function check_password(){
		var password_length = $("#password").val().length;
		if(password_length < 8){
			$("#password_error_msg").html("Should be 8 characters");
			$("#password_error_msg").show();
			error_password = true;
		}else{
			$("#password_error_msg").hide();
		}
	}
	function check_value_password(){
		var password = $("#password").val();
		var password_again = $("#password_again").val();
		if(password != password_again){
			$("#password_again_error_msg").html("Password did not matched !!");
			$("#password_again_error_msg").show();
			error_password_again = true;
		}else{
			$("#password_again_error_msg").hide();
		}
	}
	function check_email(){
		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
		
		if(pattern.test($("#email").val())){
			$("#email_error_msg").hide();
		}else{
			$("#email_error_msg").html("Invalid Email Address !!");
			$("#email_error_msg").show();
			error_email = true;
		}
	}
	
	$("#myform").submit(function(){
		var error_username = false;
		var error_password = false;
		var error_password_again = false;
		var error_email = false;
		
		if(error_username == false && error_password == false && error_password_again == false && error_email == false){
			return true;
		}else{
			return false;
		}
	});
});

</script>

<div class="paras">
<form id="myform" action="msg.php" method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" id="username" required ="" /></td>
			<td><span class="error_form" id="username_error_msg"></span></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" id="password" required =""/></td>
			<td><span class="error_form" id="password_error_msg"></span></td>
		</tr>
		<tr>
			<td>Password Again</td>
			<td><input type="password" id="password_again" required =""/></td>
			<td><span class="error_form" id="password_again_error_msg"></span></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" id="email" required =""/></td>
			<td><span class="error_form" id="email_error_msg"></span></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit"/></td>
			<td></td>
		</tr>
	</table>
</form>
	
</div>



<?php include "inc/footer.php";?>