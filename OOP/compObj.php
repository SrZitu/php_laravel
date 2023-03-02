<?php

/*==============================================================================
Criteria	                                    ==	        ===

Two objects reference the same instance	      true	        true
Objects with matching properties	          true          false
Objects with different properties	          false	        false

The comparison operator (==) returns true if two objects are the same or 
different instances of a class with the same properties’ values.
The identity operator (===) returns true if two objects reference the same instance of a class.
==============================================================================*/

class CompareObject
{
	private $x;

	private $y;

	public function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}
}

$p1 = new CompareObject(10, 20);
$p2 = new CompareObject(10, 20);
$p3 = new CompareObject(10, 20);
if ($p1 == $p2) {
	echo 'p1 and p2 are equal.';
} else {
	echo 'p1 and p2 are not equal.';
}
echo PHP_EOL;

if ($p2 === $p3) {
	echo 'p2 and p3 are equal.';
} else {
	echo 'p2 and p3 are not equal.';
}
