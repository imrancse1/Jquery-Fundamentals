<?php include "inc/header.php";?>
<?php echo"Conditional Logic if else";?><hr/>

<script>
$(document).ready(function(){
	idbBISEW();
	autoLoad();
	
});

<!--custom function-->
function idbBISEW(){
	$.ajax({
		url: "idbBISEW.xml",
		dataType: "xml",
		success: function(data){
			$("ul").children().remove();
			$(data).find("employee").each(function(){
				var alldata = '<li>Name: '+$(this).find("name").text()+'</li><li>Skill: '+$(this).find("skill").
				text()+'</li><li>Company: '+$(this).find("company").text()+'</li>';
				$("ul").append(alldata);
			});
		},
		error: function(){
			$("ul").children().remove();
			$("ul").append("<li>There is no error...</li>");
		}
	
	});

}
function autoLoad(){
	setTimeout(function(){
		idbBISEW();
		autoLoad();
	},100);
}
</script>

<div class="paras">
	<ul></ul>
</div>



<?php include "inc/footer.php";?>