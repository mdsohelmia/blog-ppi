<?php


echo  "hello git\n";



function add(...$param)
{
    return array_sum($param);
}


echo  add(2,3,5,6);


function  deduct($a,$b)
{
	return $a+$b;
}
