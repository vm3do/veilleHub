<?php 
class MathHelper {

    
    public static function add($a, $b) {
        return $a + $b;
    }

    public function sum($a, $b) {
        return $a + $b;
    }
    public static function sumo() {
        return "yes";
    }
}

$inst = new MathHelper;

echo call_user_func([$inst, 'add'], 5, 3); // Outputs: 8

['simo', 'slmcv'];

print_r($inst->sumo());

[$class, $method] = $inst->sumo();


if(class_exists($class)){
    echo "true";
} else {
    echo "nn";
};

