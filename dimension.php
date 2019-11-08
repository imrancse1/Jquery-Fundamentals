<?php include "inc/header.php";?>
<?php echo"Dimension";?><hr/>

<script>
$(document).ready(function(){
	$("#select").click(function(){
		var val = "";
		val +="width is :"+$(".dimen").width()+"</br>";
		val +="height is :"+$(".dimen").height()+"</br>";
		val +="inner width is :"+$(".dimen").innerWidth()+"</br>";
		val +="inner height is :"+$(".dimen").innerHeight()+"</br>";;
		val +="outer width is :"+$(".dimen").outerWidth()+"</br>";
		val +="outer height is :"+$(".dimen").outerHeight()+"</br>";
		val +="outer width is :"+$(".dimen").outerWidth(true)+"</br>";
		val +="outer height is :"+$(".dimen").outerHeight(true)+"</br>";
		$("#state").html(val);
	});
	
});

</script>


<button id="select"> Display</button>


<div class="parasCopy">
<div id="state"></div>
	<p class="dimen">We are learning Jquery. </p>
</div>



<?php include "inc/footer.php";?>