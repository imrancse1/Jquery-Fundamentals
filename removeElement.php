<?php include "inc/header.php";?>
<?php echo"Remove Element";?><hr/>


<script>
$(document).ready(function(){
	$("#remove").click(function (){
		$(".paras").remove();
	});
	$("#empty").click(function (){
		$(".paras").empty();
	});
});

</script>


<button id="remove"> Remove</button>
<button id="empty">Empty</button>



<div class="paras">
	<div class="inside"></div>
	<p style="float:right">We are learning Jquery. </p>
</div>



<?php include "inc/footer.php";?>