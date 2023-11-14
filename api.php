<?PHP

include_once "./includes/db.php";
	$products = getQuery("SELECT * FROM product") ;
	echo json_encode($products);

?>