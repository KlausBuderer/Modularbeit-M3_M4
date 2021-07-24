<?php

//Aufrufen des Elternübersicht Templates und übergeben der Kinder

class ElternuebersichtView{


    private $kinder = array();



    public function __construct($kinder){

        $this->kinder = $kinder;

    }

    private function OeffneBild(){
        
        return 'Hello';
    }

 
   public function setName($name){
        $this->name = $name;
    }

    public function setSex($sex){
        $this->sex = $sex;
    }

    public function setAge($age){
        $this->age = $age;
    }


    public function getData(){
        return $this-> name;

    }


    public function __destruct(){

    }

}