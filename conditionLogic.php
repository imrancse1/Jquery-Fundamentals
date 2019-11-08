<?php include "inc/header.php";?>
<?php echo"Conditional Logic if else";?><hr/>

<script>
$(document).ready(function(){
	$("#submit").click(function(e){
		var isValid = true;
		$("input[type='text']#required").each(function(){
			if(($(this).val())==''){
				isValid = false;
				$(this).css({
					"border":"1px solid red",
					"background":"#ffcece"
				});
			}else{
				$(this).css({
					"border":"",
					"background":""
				});
			}
		});
		if(isValid == false){
			e.preventDefault();
		}else{
			clear();
			document.getElementById("state").innerHTML = "Thanks for Submiting...";
			return false;
		}
	});
	
});

<!--custom function-->
function clear(){
	$("#myform :input").each(function(){
		$(this).val("");
	});
}

</script>

<div class="paras">
	<form id="myform">
		<table>
			<tr>
				<td>First Name</td>
				<td><input type="text" id="required" /></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" id="required" /></td>
			</tr>
			<tr>
				<td>Email Address</td>
				<td><input type="text" id="required" /></td>
			</tr>
			<tr>
				<td>Website</td>
				<td><input type="text" id="required" /></td>
			</tr>
			<tr>
				<td></td>
				<td><button id="submit" value="Submit">Submit</button></td>
			</tr>
		</table>
		<div id="state"></div>

	
	</form>
</div>



<?php include "inc/footer.php";?>