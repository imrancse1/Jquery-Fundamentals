<?php include "inc/header.php";?>
<?php echo"slideDown(),slideUp(),slideToggle()";?><hr/>


<script>
$().ready(function(){
	$("#slideDown").click(function(){
		$(".para").slideDown(3000);
	});
	$("#slideUp").click(function(){
		$(".para").slideUp(3000);
	});
	$("#slideToggle").click(function(){
		$(".para").slideToggle(3000);
	});

});

</script>

<button id="slideDown">Slide Down</button>
<button id="slideUp">Slide Up</button>
<button id="slideToggle">Slide Toggle</button>

<div class="para">
	<h3>Jquery Js Tutorial</h3>
	<p >Jquery</p>
</div>



<?php include "inc/footer.php";?>