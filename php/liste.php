<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#checkbox-dropdown-container {
	background: #99d3de;
	padding: 20px;
}
.custom-select {
    background: #FFF url(downward-arrow.png) no-repeat center right 10px;
    display: inline-block;
    padding: 5px 15px;
    border: #80b2bb 1px solid;
    color: #3892a2;
    border-radius: 2px;
    width: 100%;
    cursor:pointer;
    
}
div#custom-select-option-box {
    background: #FFF;
    border: #80b2bb 1px solid;
    color: #3892a2;
    border-radius: 2px;
    width: 100%;
    z-index:1;
    display:none;
}
button.search.btn {
   	background: #4c4c4c;
    border: #353535 1px solid;
    color: #ffffff;
    border-radius: 2px;
    padding: 8px 40px;
    margin-top: 20px;
    font-size: 0.9em;
}
.custom-select-option {
    width: 100%;
    padding: 5px 15px;
    margin: 1px 0px;
    cursor: pointer;
}
.custom-select-option:hover {
    
}
.result-list {
    padding-bottom: 20px;
    color: #4d4d4d;
    line-height: 25px;
}
.result-list-heading {
    font-style: italic;
    color: #717171;
    text-decoration: underline;
}

canvas
    { 
    border:2px solid #f10000;
    }
h1 {
    color: #1d91d0;
    font-size:50px;
    text-align: center;
    margin: 0;
    padding-bottom: 25px;
    }
	</style>
</head>
<body>
<div id="checkbox-dropdown-container">
		<form id="fromCustomSelect" name="fromCustomSelect" action=""
			method="post">
			<div>
				<?php 
				    if(!empty($_POST["toys"])) { 
				    $selectedValues = implode(", ", $_POST["toys"]);
				?>
        			<div class="result-list">
            			<div class="result-list-heading">The selected options are: </div>
            			<div ><?php echo $selectedValues; ?></div>
        			</div>
        			<?php 
				    } 
				?>
				<div class="custom-select" id="custom-select">Select Multi Options...</div>
				<div id="custom-select-option-box">
					<div class="custom-select-option">
						<input onchange="toggleFillColor(this);"
							class="custom-select-option-checkbox" type="checkbox"
							name="toys[]" value="wordpress"> Wordpress
					</div>
					<div class="custom-select-option">
						<input onchange="toggleFillColor(this);"
							class="custom-select-option-checkbox" type="checkbox"
							name="toys[]" value="joomla"> Joomla
					</div>
					<div class="custom-select-option">
						<input onchange="toggleFillColor(this);"
							class="custom-select-option-checkbox" type="checkbox"
							name="toys[]" value="drupal"> Drupal
					</div>
					<div class="custom-select-option">
						<input onchange="toggleFillColor(this);"
							class="custom-select-option-checkbox" type="checkbox"
							name="toys[]" value="Magento"> Magento
					</div>
				</div>
			</div>
			<button type="submit" class="search btn" >Submit</button>
		</form>
	</div>
</body>
</html>
<script type="text/javascript">
	<script>
	$("#custom-select").on("click",function(){
		$("#custom-select-option-box").toggle();
	});
	function toggleFillColor(obj) {
		$("#custom-select-option-box").show();
		if($(obj).prop('checked') == true) {
			$(obj).parent().css("background",'#c6e7ed');
		} else {
			$(obj).parent().css("background",'#FFF');
		}
	}
	$(".custom-select-option").on("click", function() {
		var checkboxObj = $(this).children("input");
		$(checkboxObj).prop("checked",true);
		toggleFillColor(checkboxObj);
	});
		
	$("body").on("click",function(e){
		if(e.target.id != "custom-select" && $(e.target).attr("class") != "custom-select-option") {
			$("#custom-select-option-box").hide();
		}
	});
	</script>
</script>