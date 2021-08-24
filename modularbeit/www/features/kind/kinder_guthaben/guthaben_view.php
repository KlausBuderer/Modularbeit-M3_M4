<?php

class GuthabenView
{

    public $guthaben;
    public $punkte;
    public $username;


    public function __construct($guthaben, $punkte)
    {
        $this->guthaben = $guthaben;
        $this->punkte = $punkte;
    }

    //Aufruf von Guthabenview und übergabe vom aktuellen Guthaben- und Punktestand.
    public function showGuthaben()
    {

        echo '<form id="myForm" action="/includes/guthaben.php" method="post">';
        echo '<input type="hidden" name="guthaben" value="' . $this->guthaben . '">';
        echo '<input type="hidden" name="username" value="' . $this->username . '">';
        echo '<input type="hidden" name="punkte" value="' . $this->punkte . '">';


        echo  '</form>';
        echo '<script type="text/javascript">';
        echo "document.getElementById('myForm').submit()";
        echo '</script>';
    }
}
