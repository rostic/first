
<html>
	<head>
		
	</head>
	<body>

		<form id="form">

		   <label for="">����� ��������</label><br>
			<input type="text" name="num" ><br>
			<label for="">��� ����������</label><br>
			<input type="text" name="name"><br>
			<label for="">�������</label><br>
			<input type="text" name="s"><br><br>

			<input type="submit" value="��������"/>
		</form>
	<script>
		$(document).ready(function () {
		 $("form").submit(function () {
		 // ��������� ID �����
		 var formID = $(this).attr('id');
		 // ���������� ������� � ����� ID
		 var formNm = $('#' + formID);
		 $.ajax({
		 type: "POST",
		 url: 'mail.php',
		 data: formNm.serialize(),
		 success: function (data) {
		 	alert("Form sent successfull");
		 // ����� ������ ���������� ��������
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