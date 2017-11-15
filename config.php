<?
	$title = 'Резка металла в Минске';
	$description = 'Описание сайта';
	$email = 'seo@graver.by';
	$autor = 'OK';

	$db_location = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'rezka-metalla';
	$db_connect = mysqli_connect($db_location,
							$db_user,
							$db_pass,
							$db_name);

	if (!$db_connect){
		exit('Ошибка соединения с БД');
	}

?>

