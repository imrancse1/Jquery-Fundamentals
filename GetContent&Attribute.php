<?php include "inc/header.php";?>
<?php echo"Chaining";?><hr/>

<?php 
	function inputname(){
		echo "imran";
	}
	
	function departname(){
		echo "CSE";
	}
	
	function skill(){
		echo "Laravel";
	}

?>

<script>
$(document).ready(function(){
	$("#show").click(function(){
		alert("The Text is : "+$("#line1").text());
	});
	$("#source").click(function(){
		alert("The Text is : "+$("#line").html());
	});
	$("#testval").click(function(){
		alert("The Text is : "+$("#name").val());
	});
	
	$("#name1").click(function(){
		$("#getname").val("<?php inputname(); ?>");
	});
	$("#dept").click(function(){
		$("#line2").html("<?php departname(); ?>");
	});
	$("#skill").click(function(){
		$("#line3").text("<?php skill(); ?>");
	});
	
	
	

});

</script>

<button id="show">Show text</button>
<button id="source">Show html</button>
<button id="testval">Show Value</button><hr/>
<button id="name1">Show name</button>
<button id="dept">Show department</button>
<button id="skill">Show skill</button>


<div class="paras">
	<div>
		Name: <input type="text" id="name" value="imran" />
	</div>
	<p id="line">jquery live <strong>project</strong>.</p>
	<p id="line1">jquery live project.</p><hr/>
	
	<div>
		Name: <input type="text" id="getname" value="name will be here.." />
	</div>
	<p id="line2"><strong>Department</strong>.</p>
	<p id="line3">Skill</p>
	
	
</div>



<?php include "inc/footer.php";?>