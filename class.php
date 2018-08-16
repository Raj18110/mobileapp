<?php
class MyClass
{
  function a ()
  {
    include 'FunctionB.php';
    b ();
  }
}

$o = new MyClass;
$o->a();
?>