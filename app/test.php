<pre>
<?
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		print_r($_FILES);
	}
	switch($_FILES["userfile"]["error"]){
		case UPLOAD_ERR_INI_SIZE:
			echo "Превышен максимально допустимый размер"; break;
		case UPLOAD_ERR_FORM_SIZE:
			echo "Превышено значение MAX_FILE_SIZE"; break;
		case UPLOAD_ERR_PARTIAL:
			echo "Файл загружен частично"; break;
		case UPLOAD_ERR_NO_FILE:
			echo "Файл не был загружен"; break;
		case UPLOAD_ERR_NO_TMP_DIR:
			echo "Отсутствует временная папка"; break;
		case UPLOAD_ERR_CANT_WRITE:
			echo "Не удалось записать файл не диск";
	}
	if ( $_FILES["userfile"]["error"]!= UPLOAD_ERR_OK){
		echo "Размер загруженного файла: " . $_FILES["userfile"]["size"];
		echo "Тип загруженного файла: " . $_FILES["userfile"]["type"];
	}
	move_uploaded_file($_FILES["userfile"]["tmp_name"], "upload/" . $_FILES["userfile"]["name"]);
?>
<form action="test.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		<input name="userfile" type="file">
		<button type="submit">button</button>
</form>


<?php
	// print_r($_FILES);
	// switch($_FILES["userfile"]["error"]){
	// 	case UPLOAD_ERR_INI_SIZE:
	// 		echo "Превышен максимально допустимый размер"; break;
	// 	case UPLOAD_ERR_FORM_SIZE:
	// 		echo "Превышено значение MAX_FILE_SIZE"; break;
	// 	case UPLOAD_ERR_PARTIAL:
	// 		echo "Файл загружен частично"; break;
	// 	case UPLOAD_ERR_NO_FILE:
	// 		echo "Файл не был загружен"; break;
	// 	case UPLOAD_ERR_NO_TMP_DIR:
	// 		echo "Отсутствует временная папка"; break;
	// 	case UPLOAD_ERR_CANT_WRITE:
	// 		echo "Не удалось записать файл не диск";
	// }
	// if ( $_FILES["userfile"]["error"]!= UPLOAD_ERR_OK){
	// 	echo "Размер загруженного файла: " . $_FILES["userfile"]["size"];
	// 	echo "Тип загруженного файла: " . $_FILES["userfile"]["type"];
	// 	move_uploaded_file($_FILES["userfile"]["tmp_name"], "upload/" . $_FILES["userfile"]["name"]);
	// }
?>
</pre>