<?php 

	require_once '../include/header2.php';
	require_once '../include/functions.php';

 ?>
 <div class="main-wrap">
 <h2 class = "center">Разные формы PHP</h2>
 <?php 

 debug($_GET);

  ?>

<form action="" method="get">
	<input type="text" name = "name"><br>
	<select name="fst[]" multiple size="3">
		<option value="1">first</option>
		<option value="2">second</option>
		<option value="3">third</option>
	</select><br>
	<input type="radio" name="marrk" value="1">1
	<input type="radio" name="marrk" value="2">2
	<input type="radio" name="marrk" value="3">3<br>
	<input type="checkbox" name= "checkbox1" >checkbox1
	<input type="checkbox" name= "checkbox2" >checkbox2<br>
	<textarea name="textarea" id="textarea" cols="30" rows="10"></textarea><br>
	<input type="submit" value="submit">
</form>
</div>
<?php 

	require_once '../include/footer.php';

 ?>

 <?php 

//  function percent ($a, $b) {
//  	$result = $a % $b;
//  	return $result;
//  }

// highlight_string('<?php

// 	 $result = $a % $b;
// 	 return $result; 

//  ?>');

?>

<!-- <script>
	alert('hello');
</script> -->