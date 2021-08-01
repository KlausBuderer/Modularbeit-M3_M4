<?php

class Aufgabe{

private $id;
private $question = "";
private $right = "";
private $A = "";
private $B = "";
private $C = "";
private $D = "";
private $stufe = 1;

private $data = array(
    'Id' => 0,
    'question' => "",
    'right' => "",
    'A' => "",
    'B' => "",
    'C' => "",
    'D' => "",
    'stufe' => 1
);

public function __construct($id, $question, $right, $A, $B, $C, $D,$stufe)
{
    $this->data['Id'] = $id;
    $this->data['question']= $question;
    $this->data['right']= $right;
    $this->data['A'] = $A;
    $this->data['B'] = $B;
    $this->data['C'] = $C;
    $this->data['D'] = $D;
    $this->data['stufe'] = $stufe;
    
}

 public function getEncoded()
{
   return $this->data;
}



public function getId(){
    return $this->id;
}
public function getQuestion(){
    return $this->question;
}

public function getRight(){
    return $this->right;
}

public function getA(){
    return $this->A;
}

public function getB(){
    return $this->B;
}

public function getC(){
    return $this->C;
}

public function getD(){
    return $this->D;
}

public function getStufe(){
    return $this->stufe;
}

}


