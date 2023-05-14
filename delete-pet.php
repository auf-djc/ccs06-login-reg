<?php

require "config.php";

use App\pets;

// Remove pet record, and automatically redirect to index

try {
	$id = $_GET['id'];
	$result = pets::deleteById($id);

	if ($result) {
		header('Location: index.php');
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

