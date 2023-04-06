<?php
	for ($i = 1; $i <= 10; $i++) {
		for ($j = 1; $j <= 10; $j++) {
			echo "nums: $i $j <br>";
		}
	}
?>
<br>
<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];

	foreach ($arr as $key => $elem) {
		echo "pair: $elem $key <br>";
	}
?>
<br>
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
    foreach ($products as $product){
        echo "product: $product[name], $product[price], $product[amount] <br> ";
    }

?>