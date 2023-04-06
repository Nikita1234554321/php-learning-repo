<?php
	$products = [
		[
			'name'   => 'product1',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'product2',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'product3',
			'price'  => 300,
			'amount' => 7,
		],
	];
	echo '<table>';
	foreach ($products as $product) {
		echo "<table><tr><tr><td>$product[name] $product[price] $product[amount]</td></tr></tr></table>";

	}
?>


