<?php
function autoload($className)
{
    include strtolower("{$className}.php");
}
spl_autoload_register("autoload");

//object create korar sathei access passi  class k
//this is possible because of file AutoLoading
(new Model)->modelFunc();
(new Tree)->treeFunc();
