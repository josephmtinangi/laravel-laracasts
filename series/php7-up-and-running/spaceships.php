<?php

$games = ['Mass Effect', 'Super Mario Bros', 'Zelda', 'Fallout', 'Metal Gear'];

//sort($games);
//asort($games);

usort($games, function($a, $b){
	return $a <=> $b;
});

var_dump($games);