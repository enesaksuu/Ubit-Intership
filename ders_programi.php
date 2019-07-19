<?php

$days = ["Pazartesi","Salı","Çarşamba","Perşembe","Cuma"];

$week=[
	["Mat","Mat","Fen","Fen"],
	["Boş","Res","Bed","Bed"],
	["Turk","Turk","Mat","Mat"],
	["Coğ","Coğ","Boş","Boş"],
	["Tar","Müz","Türk","Türk"]
];

$max_lesson = 4;

echo "Max Lesson is ".$max_lesson[0].' and bla bla';
echo "Max Lesson is $max_lesson and bla bla bla";	//
echo 'Max Lesson is $max_lesson and bla bla bla';	//
echo "<a href='http://dhdjdjdj'>Adres bldld</a>";
echo '<a href="http::///sdjdjdjdj">djdjdj</a>';
echo "<a href=\"http://fjdjfdjdjdj\">hdhdddh</a>";


?>


<!DOCTYPE html>
<html>
<head>
	<title>Ders Programı</title>
</head>
<body>

	<table bordeR=1>
		
		<?php foreach($week as $day=>$lessons):?>
			<tr>
				<td><?php echo $days[$day]?></td>
				<?php foreach($lessons as $lesson):?>
					<td><?php echo $lesson?></td>
				<?php endforeach?>
			</tr>
		<?php endforeach;?>

	</table>


	<table border="1" align="center">
		
		<tr>
			<?php foreach($days as $day):?>
				<td><?php echo $day?></td>
			<?php endforeach;?>
		</tr>

		<?php for($hour=0;$hour<$max_lesson;$hour++):?>
			<tr   <?php echo $hour % 2 == 0 ? 'style="background-color:#dddddd"' : ''  ?>    >
				<?php for($day=0;$day<count($days);$day++):?>
					<td><?php echo $week[$day][$hour]?></td>
				<?php endfor;?>
			</tr>
		<?php endfor;?>

	</table>

</body>
</html>