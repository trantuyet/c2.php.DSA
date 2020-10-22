<?php
include_once 'MyList.php';
 $list1 =new MyList([1,2,3,4],10);
// $list1->add(5);
 $list1->removeItem(3);
echo $list1->getItem(3);
?>