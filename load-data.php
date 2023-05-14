<?php

require "config.php";

use App\pets;

try {
	pets::register('BGC Cat', 'Male', '2022-07-05', 'Brent', 'brent@gmail.com', 'BGC', '09123456789');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Fluffy',
			'gender' => 'Female',
			 'birthdate' => '2022-01-01',
			'owner' => 'John',
			'email' => 'john@example.com',
			'address' => '123 Main St',
			'contact_number' => '1234567890',
		],
		[
			'name' => 'Max',
			'gender' => 'Male',
			'birthdate' => '2022-02-01',
			'owner' => 'Jane',
			'email' => 'jane@example.com',
			'address' => '456 Elm St',
			'contact_number' => '9876543210',
		],
	];
	pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}
