<?php

function axtar ( $list, $axtar )
{

	foreach ( $list as $element )
	{
		if ( $element === $axtar )
		{
			return TRUE;
		}
	}

	return FALSE;
}

$seherler = [
	'Baku',
	'Berlin',
	'Brooklyn',
	'Batman',
	'Bursa'
];
$axtar1   = 'Bishkek';
$axtar2   = 'Baku';

echo axtar( $seherler, $axtar1 ) . '<br>';
echo axtar( $seherler, $axtar2 );