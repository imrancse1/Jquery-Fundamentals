<?php include "inc/header.php";?>
<?php echo"Ajax Post Method";?><hr/>

<script>
$(document).ready(function(){
	$("#myform").submit(function(){
		<!--$.post("content.php",{"name":"Md.Imran Hossain", "skill":"Laravel and JavaScript"},function(data){-->
		$.post("content.php",$("#myform").serialize(),function(data){
			$("#state").html(data);
		});
		return false;
	});
	
});

<!--custom function-->


</script>

<div class="paras">
<div id="state"></div>
	<form id="myform">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"  /></td>
			</tr>
			<tr>
				<td>Skill</td>
				<td><input type="text" name="skill"  /></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"  /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit" /></td>
			</tr>
		</table>
	</form>
</div>



<?php include "inc/footer.php";?>