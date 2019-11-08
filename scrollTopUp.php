<?php include "inc/header.php";?>
<?php echo"Scroll Top Up";?><hr/>

<script>
$(document).ready(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop()>300) {
			$("#gotoup").fadeIn();
		}else{
			$("#gotoup").fadeOut();
		}
	});
	$("#gotoup").click(function(){
		$("html,body").animate({scrollTop:0},500);
	});

});

</script>


<div class="parass">
	<p>These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.</p>
	<p>These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.</p>
	<p>These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.</p>
	<p>These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.</p>
	<p>These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.</p>
	<p>These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.</p>
	<p>These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.These are fake text to test our program.</p>

</div>



<?php include "inc/footer.php";?>