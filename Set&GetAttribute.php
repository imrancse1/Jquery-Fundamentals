<?php include "inc/header.php";?>
<?php echo"Chaining";?><hr/>


<script>
$(document).ready(function(){
	$("#show").click(function(){
		alert($("#live").attr("href"));
	});
	$("#chance").click(function(){
		$("#live").attr("href","http://www.youtube.com");
	});
	$("#chance1").click(function(){
		$("#live").attr({
			"href" : "http://www.youtube.com",
			"title" : "Youtube",
		});
	});

});

</script>

<button id="show">Show Value</button>
<button id="chance">Chance Value</button>
<button id="chance1">Chance Value</button>



<div class="paras">
	<p><a href="http://www.facebook.com" title="project Tutorial" id="live">Jquery Live Project</a></p>
</div>



<?php include "inc/footer.php";?>