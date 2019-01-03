<?php 
	require_once('vendor/autoload.php');
	
	use SimpleCrud\SimpleCrud;

	require_once('db.php');

	$db = new SimpleCrud($pdo);

	//To get any table, use magic properties, they will be instantiated on demand:
	$post = $db->post;

	//Get the post id = 3;
	$post = $db->post;
	print_r ($post);

	// //Check if a row exists
	// if (isset($db->post[3])) 
	// {
	//     echo 'exists';
	// }

	// //Delete a post
	// unset($db->post[1]);

	// //Update a post
	// $db->post[2] = [
	//     'title' => 'Hello world'
	// ];

	// //Insert a new post
	// $db->post[] = [
	//     'title' => 'Hello world 2'
	// ];
 ?>