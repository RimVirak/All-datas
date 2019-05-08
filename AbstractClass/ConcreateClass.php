

<?php

include "AbstractPrefix.php";

class ConcreteClass extends AbstractPrefix{

    public function prefixName ($name,$separator="."){

        if($name=="PaMan"){
            $prefix="Mr";
        }elseif($name=="Pawoman"){
            $prefix="Mrs";
        }else{
            $prefix="";
        }
        return "{$prefix}{$separator}{$name}";
    }
}

$class =new ConcreteClass;
echo $class->prefixName("PaMan")."<br/>";
echo $class->prefixName("Pawoman");



