<?php include "inc/header.php";?>
<?php echo"Add Element";?><hr/>

<?php 
	function add(){
		echo "Live Project";
	}
	function before(){
		echo " Tutorial ";
	}
	function after(){
		echo " Live ";
	}
?>
<script>
$(document).ready(function(){
	$("#add").click(function(){
		$("p").append("<?php add(); ?>");
	});
	$("#add1").click(function(){
		$("p").prepend("<?php add(); ?>");
	});
	
	$("#after").click(function(){
		$("#p1").before("<?php before(); ?>");
	});
	$("#before").click(function(){
		$("#p1").after("<?php after(); ?>");
	});

});

</script>

<button id="add">Append</button>
<button id="add1">Prepend</button>
<button id="after">After Append</button>
<button id="before">Before Prepend</button>



<div class="paras">
	<p> Jquery Tutorial </p>
	<p id="p1"> Jquery </p>
</div>



<?php include "inc/footer.php";?>