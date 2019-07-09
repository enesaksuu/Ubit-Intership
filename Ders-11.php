<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<b><mark>SHIFT+ALT+F</b></mark>
	
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<hr>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<sub>3</sub><sup>5</sup></p>

		<hr>

		<p><ins>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</ins></p>

		<hr>

		<p><del>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </del></p>

		<hr>

		<p><s>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</s></p>

		<hr>

		<p><code>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</code></p>

		<table border="5">
			<tr>
				<th>AD</th>
				<th>SOYAD</th>
				<th>NUMARA</th>
				<th>SINIF</th>
			</tr>

			<tr>
				<td width="150">MELİH</td>	
				<td width="150">MELİH</td>
				<td width="150">MELİH</td>
				<td width="150">MELİH</td>								
			</tr>
			<tr>
				<td width="150">ENES</td>
				<td width="150">ENES</td>
				<td width="150">ENES</td>
				<td width="150">ENES</td>
			</tr>

		</table>
		<br>

		<div>Ben Ortadayım</div>

		<div align="center">Ben Ortadayım</div>



		<center>Ben Ortadayım</center>

		<ul>
			<li>ENES</li>
			<li>MELİH</li>
			<li>ENES</li>
		</ul>

		<ol>
			<li>ENES</li>
			<li>MELİH</li>
			<li>ENES</li>
		</ol>

		<dl>
			<dt>MELİH KURSLARI</dt>
			<dd>Açıklamasını Buraya Ekleyiniz...</dd>
		</dl>

		<img src="https://i.udemycdn.com/course/240x135/1147664_8cda_9.jpg" alt="Enes Melih adam">

		<img src="php.jpg" alt="yusuf reis">

		<br><br>
		<iframe width="100%" height="200" src="https://www.yilmazmutfak.com/"></iframe>
		<br><br><br>

        	<!-- Form İşlemleri
				Action =>Formun gönderileceği alanı işaret eder.
				Method =>POST ve GET 
			-->	
			<form action="" method="GET" target="_blank">
				<!-- Target gönderilen formun başka sayfada açılmasını sağlar -->
				
				Text Type <input style="width: 500px;" type="text" name="texttype"> <br><br>
				Max <input type="Number" name="texttype" max="5"> <br><br>
				Min <input type="Number" name="texttype" min="5"> <br><br>
				Step <input type="Number" name="texttype" step="5"> <br><br>
				<!-- Step=> artış sayısını belirler -->
				Value Type <input type="text" name="texttype" value="Enes Aksu"> <br><br>
				Placeholder Type <input type="text" name="texttype" placeholder="Adınızı Giriniz."> <br><br>
				Required Type <input type="text" name="texttype" autofocus="" placeholder="Adınızı Giriniz." required=""> <br><br>
				<!-- Autofocus=> sayfada otomatik ilk odak yerini belirler -->
				<!-- Required=> boş geçilmemesi gereken yeri belirtir -->
				ReadOnly Type <input type="text" name="texttype" placeholder="Adınızı Giriniz." readonly=""> <br><br>
				<!-- ReadOnly=> değiştirilemez sabit anlamında -->
				Disabled Type <input type="text" name="texttype" placeholder="Adınızı Giriniz." disabled=""> <br><br>
				<!-- Disabled=> içindeki value değeri karşı tarafa gitmez -->
				Mail Type <input type="email" name="" autocomplete="off"> <br><br>
				<!-- Autocomplete=> önceden girilmiş verilerin hatırlatmasını kapatır  -->
				Number Type <input type="Number" name=""> <br><br>	
				Password Type <input type="Password" name=""> <br><br>
				Radio Type <input type="Radio" name=""> <br><br>	
				Checkbox Type <input type="Checkbox" name=""> <br><br>
				File Type <input type="File" multiple="" name=""> <br><br>		
				<!-- Multiple=> Birden çok dosya seçimi -->		

				Textarea <textarea rows="10" cols="150"></textarea><br><br>
				<!-- Textarea=> Görüşleriniz vs yazılan kısım,metin -->
				<!-- Rows=> Satır sayısı -->
				<!-- Cols=> Sütun sayısı -->

				SelectBox <select>
					<option>Seçim yapınız</option>
					<option>BMW</option>
					<option>MERCEDES</option>
					<option>AUDI</option>
					<option selected="">VOLVO</option>
					<!-- Selected=> seçili gelmesini sağlar -->
				</select><br><br><br>

				Submit Type <input type="Submit" value="Formu Gönder" name=""><br><br>
				
			</form>

			<a href="https://www.udemy.com" target="_blank">Udemy Kurslarına Git</a>
			<br>
			<a href="https://www.udemy.com"><img src="php.jpg" alt="yusuf reis"></a>
			<br>
			<a href="#"><img src="php.jpg" alt="yusuf reis"></a>
			<br>
			<a href="javascript:void(0)"><img src="php.jpg" alt="yusuf reis"></a>




			<br><br><br><br><br><br><br><br><br><br><br><br>
		</body>
		</html>