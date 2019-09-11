<?php
include "ComparablesCircle.php";

$circleOne = new ComparablesCircle('circleOne', 8);
$circleTwo = new ComparablesCircle('circleTwo', 2);

var_dump($circleOne->compareTo($circleTwo));