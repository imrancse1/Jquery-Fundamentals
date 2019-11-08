<?php include "inc/header.php";?>
<?php echo"FadeIn(),FadeOut(),FadeTo()";?><hr/>


<script>
$().ready(function(){
	$("#fadeIn").click(function(){
		$(".para").fadeIn();
	});
	$("#fadeOut").click(function(){
		$(".para").fadeOut();
	});
	$("#fadeTo").click(function(){
		$(".para").fadeTo(1000,0.4);
	});
	$("#fadeToggle").click(function(){
		$(".para").fadeToggle();
	});

});

</script>

<button id="fadeIn">Fade In</button>
<button id="fadeOut">Fade Out</button>
<button id="fadeTo">FadeTo</button>
<button id="fadeToggle">FadeToggle</button>


<div class="para">
	<h3>Jquery Js Tutorial</h3>
	<p >Jquery</p>
</div>



<?php include "inc/footer.php";?>