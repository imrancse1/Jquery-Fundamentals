<?php include "inc/header.php";?>
<?php echo"CSS() Method";?><hr/>

<?php 
	$bg = "background-color";
	$bgvalue = "#666";
	
	$clr = "font-size";
	$clrvalue = "#fff";
	
	$pdd= "padding";
	$pddvalue = "30px";
	
	$wd= "width";
	$wdvalue= "300px";
	
?>


<script>
$(document).ready(function(){
	$("#style").click(function(){
		<!--$("p").css({"background-color":"#000"}); or -->
		$("p").css({
		"<?php echo $bg; ?>":"<?php echo $bgvalue; ?>",
		"<?php echo $clr; ?>":"<?php echo $clrvalue; ?>",
		"<?php echo $pdd; ?>":"<?php echo $pddvalue; ?>",
		"<?php echo $wd; ?>":"<?php echo $wdvalue; ?>"
		});
	});
	
	
});

</script>


<button id="style"> Add CSS</button>


<div class="paras">
	<!-- <div class="inside"></div> -->
	<p >We are learning Jquery. </p>
</div>



<?php include "inc/footer.php";?>