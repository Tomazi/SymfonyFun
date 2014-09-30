<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class TestController{

    public function animalAction($test){

        $animals = array(
            "animal1" => array(
                "name" => "Zebra",
                "size" => "Big"
            ),
            "animal2" => array(
                "name" => "Lion",
                "size" => "Medium"
            ),
            "animal3" => array(
                "name" => "Giraffe",
                "size" => "Huge"
            )
        );

        var_dump($animals);

        if($test === 'Lion'){
            return new Response('<html><body>Wraaaaaaa I eat you</body></html>');
        }else{
            return new Response('<html><body>Your Word: '.$test.'</body></html>');
        }



    }

}