<?php

$text      = 'Bu cumle 6 sozden cox soze sahibdir';
$wordCount = 1; // Ilk sozu onceden saymish olur
$i         = 0;

while ( isset( $text[ $i ] ) )
{
	if ( $text[ $i ] === ' ' )
	{
		if ( $text[ $i + 1 ] !== ' ' ) // bir boshluq ve herf yanashi olanda bir soz sayacaq
		{
			$wordCount++;
		}
	}
	$i++;
}

echo $wordCount;