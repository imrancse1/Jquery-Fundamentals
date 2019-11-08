<?php include "inc/header.php";?>
<?php echo"CSS Classes";?><hr/>

<?php function bg(){
	echo "bg";
}?>
<?php function text(){
	echo "text";
}?>

<script>
$(document).ready(function(){
	$("#style").click(function(){
		$("p").addClass("text bg");
	});
	$("#styleRemove").click(function(){
		$("p").removeClass("<?php  bg();  ?>");
	});
	$("#styleRemoveAll").click(function(){
		$("p").removeClass("<?php  text();  ?>");
	});
	$("#toggle").click(function(){
		$("p").toggleClass("<?php  bg();  ?>");
	});
	
});

</script>


<button id="style"> Give style</button>
<button id="styleRemove"> Remove style</button>
<button id="styleRemoveAll"> Remove All style</button>
<button id="toggle">Toggle Remove All style</button>




<div class="paras">
	<!-- <div class="inside"></div> -->
	<p class="text bg">We are learning Jquery. </p>
</div>



<?php include "inc/footer.php";?>