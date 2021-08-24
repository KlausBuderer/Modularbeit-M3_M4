<?php

//Aufrufen des Elternübersicht Templates und übergeben der Kinder

class ElternuebersichtView
{
    private $kinder = array();
    private $kind1 = array('max', 19);
    private $kind2 = array('anna', 21);

    public function __construct($kinder)
    {

        $this->kinder = $kinder;
    }

    public function showKinder()
    {

        $_SESSION['kinderListe'] = $this->kinder;

        echo '<form id="myForm" action="/includes/eltern_uebersicht_template.php" method="post">';
        echo  '</form>';
        echo '<script type="text/javascript">';
        echo "document.getElementById('myForm').submit()";
        echo '</script>';
    }
}
