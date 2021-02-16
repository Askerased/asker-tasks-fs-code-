<?php

$x        = 8;
$y        = 6;
$text     = 'Burdan necese cumle kesilecek';
$new_text = '';

for ( $i = $x-1; $i < $x + $y-1; $i++ )
{
	$new_text .= $text[ $i ];
}

echo $new_text;