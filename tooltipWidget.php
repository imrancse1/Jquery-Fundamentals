<?php include "inc/header.php";?>
<?php echo"Tool Tip";?><hr/>

<script>
$(document).ready(function(){
	$("#textname").tooltip({
		content:tolltipData,
		track:true,
		show:{delay:100,duration:500,effect:'slideDown'},
		hide:{delay:100,duration:500,effect:'slideUp'}

	});
	function tolltipData(){
		return "Data Form my function";
	}

});

</script>


<div class="parass">
	<label id="lblname" for="textname" title="Full name">Name</label>
	<input type="text" id="textname" title="Your name will be here.." >

</div>



<?php include "inc/footer.php";?>