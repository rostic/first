
<html>
	<head>
		
	</head>
	<body>

		<form id="form">

		   <label for="">Номер квартиры</label><br>
			<input type="text" name="num" ><br>
			<label for="">ФИО покупателя</label><br>
			<input type="text" name="name"><br>
			<label for="">Площадь</label><br>
			<input type="text" name="s"><br><br>

			<input type="submit" value="Добавить"/>
		</form>
	<script>
		$(document).ready(function () {
		 $("form").submit(function () {
		 // Получение ID формы
		 var formID = $(this).attr('id');
		 // Добавление решётки к имени ID
		 var formNm = $('#' + formID);
		 $.ajax({
		 type: "POST",
		 url: 'mail.php',
		 data: formNm.serialize(),
		 success: function (data) {
		 	alert("Form sent successfull");
		 // Вывод текста результата отправки
		 $(formNm).html(data);
		 },
		 error: function (jqXHR, text, error) {
		 	alert("Error");
		 $(formNm).html(error);
		 }
		 });
		 return false;
		 });
		});


	</script>

	</body>
</html>