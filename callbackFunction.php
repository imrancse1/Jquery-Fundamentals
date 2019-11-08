<?php include "inc/header.php";?>
<?php echo"animate(),stop()";?><hr/>

<?php 
	function test(){
		echo "callback started.";
	}
?>

<script>
$().ready(function(){
	$("#start").click(function(){
		$(".inside").animate({
			left:'400px',
			opacity:'0.5',
			height:'300',
			width:'300'
		},5000, function(){
			alert("<?php echo test();?>");
		});
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