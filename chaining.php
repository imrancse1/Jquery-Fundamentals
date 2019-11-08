<?php include "inc/header.php";?>
<?php echo"Chaining";?><hr/>

<script>
$().ready(function(){
	$("#chain").click(function(){
		$(".paras").css("background","green").slideUp(3000).slideDown(3000);
	});
	$("#chain1").click(function(){
		$(".paras").css("color","blue")
		.slideUp(3000)
		.slideDown(3000);
	});

});

</script>

<button id="chain">Click Here</button>
<button id="chain1">Click Here</button>


<div class="paras">
	<p>Chaining Coding</p>
	<div class="inside">
		
	</div>
</div>



<?php include "inc/footer.php";?>