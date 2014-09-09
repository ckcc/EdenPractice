<?php //-->

include('basic.php');

$hello = new My_First_Class(11);

print_r(eden('route')->getClass()->route('shortcut', 'My_First_Class'));
echo '</BR>Routing successful.</BR>';

$hello = eden()->shortcut();
