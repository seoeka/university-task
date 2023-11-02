<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana Dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['calculate'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operation'];
		switch ($operasi) {
			case 'addition':
				$result = $bil1 + $bil2;
			break;
			case 'substraction':
				$result = $bil1 - $bil2;
			break;
			case 'multiplication':
				$result = $bil1 * $bil2;
			break;
			case 'division':
				if ($bil2 != 0) {
					$result = $bil1 / $bil2;
				} else {
					$result = 'Tidak bisa dibagi dengan 0';
				}
			break;
		}
	}
	?>
	<div class="calculator">
		<h2 class="title">KALKULATOR</h2>
		<form method="post" action="index.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Angka Pertama">
            <select class="opt" name="operation">
				<option value="addition">+</option>
				<option value="substraction">-</option>
				<option value="multiplication">x</option>
				<option value="division">/</option>
			</select>
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Angka Kedua">
			<input type="submit" name="calculate" value="Calculate" class="button">											
		</form>
		<?php 
		if(isset($_POST['calculate'])){ 
			if (is_numeric($result)) {
				?>
				<input type="text" value="<?php echo $result; ?>" class="bil">
				<?php
			} else {
				?>
				<input type="text" value="<?php echo $result; ?>" class="bil" style="color: red;">
				<?php
			}
		} else { ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>
