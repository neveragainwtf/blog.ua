<?php

	function connectDB() {
		return new mysqli("localhost", "MySite", "123456", "mysite-local");
	}


	function closeDB($mysqli) {
		$mysqli->close();
	}

	function regUser($login, $password) {
		$mysqli = connectDB();
		$mysqli->query ("INSERT INTO users (`login`, `password`) VALUES ('$login', '$password')");
		closeDB($mysqli);
	}

	function checkUser($login, $password) {
		if (($login == "") ||($password == "")) return false;
		$mysqli = connectDB();
		$results_set = $mysqli->query("SELECT password FROM users WHERE login = '$login'");
		$user = $results_set->fetch_assoc();
		$real_password = $user['password'];
		closeDB($mysqli);
		return $real_password == $password;
	}

	function isAdmin($login){
        $mysqli = connectDB();
        $results_set = $mysqli->query ("SELECT * FROM `users` WHERE `login` = '$login'");
        $row = $results_set->fetch_assoc();
        closeDB($mysqli);
        return $row["admin"];
    }

    function addArticle($title, $intro_text, $full_text) {
		$mysqli = connectDB();
	   $success = $mysqli->query ("INSERT INTO `articles` (`title`, `intro_text`, `full_text`) VALUES ('$title', '$intro_text', '$full_text')");
		closeDB($mysqli);
		return $success;
	}

 	function getAllArticles	() {
		session_start();
		$mysqli = connectDB();
		$results_set = $mysqli->query('SELECT * FROM `articles` ORDER BY `id` DESC ');
		closeDB($mysqli);
		return $results_set;
	}

	function deleteArticle	($title) {
		session_start();
		$mysqli = connectDB();
		$results_set = $mysqli->query("DELETE FROM `articles` WHERE `title` = '$title' ");
		closeDB($mysqli);
		return $results_set = true;
	}
	// here!
	// function getAllPhoto() {
	// 	session_start();
	// 	$mysqli = connectDB();
	// 	$results_set = $mysqli->query('SELECT * FROM `articles` ORDER BY `id` DESC ');
	// 	closeDB($mysqli);
	// 	return $results_set;
	// }

	function getAvatar($login) {
		$mysqli = connectDB();
		$results_set = $mysqli->query("SELECT `avatar` FROM `users` WHERE `login` ='$login' ");
		$row = $results_set->fetch_assoc();
		closeDB($mysqli);
		return $row['avatar'];
	}

	function isSecurity ($avatar) {
		$name = $avatar["name"];
		$type = $avatar["type"];
		$size = $avatar["size"];
		$blacklist = array(".php", ".php3", "php4", "phtml");
		foreach ($blacklist as $item) {
			if (preg_match("/$item\$/i", $name)) return false;	
		}
		if (($type != "image/gif") && ($type != "image/png") && ($type != "image/jpg") && ($type != "image/jpeg")) return false;
		if ($size > 5 * 1024 * 1024) return false;
		return true;
	}

	function loadAvatar ($avatar, $login) {
		$type = $avatar["type"];
		$uploaddir = "avatars/";
		$name = md5(microtime()).".".substr($type, strlen("image/"));
		$uploadfile = $uploaddir.$name;
		if (move_uploaded_file($avatar["tmp_name"], $uploadfile)){
			setAvatar ($login, $name);
			return true;
		}
		else return false;
	}

	function setAvatar($login, $name) {
		$mysqli = connectDB();
		$mysqli->query("UPDATE `users` SET `avatar`='$name' WHERE `login` ='$login' ");
		closeDB($mysqli);
	}
	//here!!!
	function getPhoto($title) {
		$mysqli = connectDB();
		$results_set = $mysqli->query("SELECT `photo` FROM `articles` WHERE `title` = '$title' ");
		$row = $results_set->fetch_assoc();
		closeDB($mysqli);
		return $row['photo'];
	}

	function loadPhoto ($photo, $title) {
		$type = $photo["type"];
		$uploaddir = "../photo/";
		$name = md5(microtime()).".".substr($type, strlen("image/"));
		$uploadfile = $uploaddir.$name;
		if (move_uploaded_file($photo["tmp_name"], $uploadfile)){
			setPhoto ($title, $name);
			return true;
		}
		else return false;
		
	}

	function setPhoto($title, $name) {
		$mysqli = connectDB();
		$mysqli->query("UPDATE `articles` SET `photo`='$name' WHERE `title` = '$title' ");
		closeDB($mysqli);
	}

	function isSecurityPhoto ($photo) {
		$name = $photo["name"];
		$type = $photo["type"];
		$size = $photo["size"];
		$blacklist = array(".php", ".php3", "php4", "phtml");
		foreach ($blacklist as $item) {
			if (preg_match("/$item\$/i", $name)) return false;	
		}
		if (($type != "image/gif") && ($type != "image/png") && ($type != "image/jpg") && ($type != "image/jpeg")) return false;
		if ($size > 15 * 1024 * 1024) return false;
		return true;
	}

	// here! 20.03.
	function giveAdmRight ($login) {
		$mysqli = connectDB();
		$mysqli->query("UPDATE `users` SET `admin`='1' WHERE `login` ='$login' ");
		closeDB($mysqli);
	}

	function rmvAdmRight ($login) {
		$mysqli = connectDB();
		$mysqli->query("UPDATE `users` SET `admin`='0' WHERE `login` ='$login' ");
		closeDB($mysqli);
	}

	function checkAdm ($login) {
		$mysqli = connectDB();
		$results_set = $mysqli->query("SELECT `admin` FROM `users` WHERE `login` ='$login' ");
		$row = $results_set->fetch_assoc();
		closeDB($mysqli);
		return $row['admin'];		
	}




?>