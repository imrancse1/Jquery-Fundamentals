<?php include "inc/header.php";?>
<?php echo"animate(),stop()";?><hr/>


<script>
$().ready(function(){
	$("#start").click(function(){
		$(".inside").animate({
			left:'400px',
			opacity:'0.5',
			height:'300',
			width:'300'
		},5000);
	});
	$("#stop").click(function(){
		$(".inside").stop();
	});
	
	
	

});

</script>

<button id="start">Animation Start</button>
<button id="stop">Animation Stop</button>


<div class="paras">
	<div class="inside">
		
	</div>
</div>



<?php include "inc/footer.php";?>