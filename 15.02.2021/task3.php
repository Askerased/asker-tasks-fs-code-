<?php

function reverseArray ( $arr )
{
	if (array_filter($arr) == NULL)
	{
		return $arr;
	}

	$i = count( $arr ) - 1;

	while ( isset( $arr[ $i ] ) )
	{
		$reversed_arr[] = $arr[ $i ];
		$i--;
	}

	return array_filter($reversed_arr);
}

$cumle = [
	'uzredir',
	'gelmek',
	'aylari',
	'yaz'
];
$cumle1 = [];

print_r( reverseArray( $cumle1 ) );

