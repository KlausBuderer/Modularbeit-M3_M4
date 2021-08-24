<?php

class Lernfortschritt_speichern_view
{

    public $erzieltePunkte;
    public $punkteGuthaben;
    public $mediengutscheine;

    public function __construct($erzieltePunkte, $punkteGuthaben, $mediengutscheine)
    {
        $this->erzieltePunkte = $erzieltePunkte;
        $this->punkteGuthaben = $punkteGuthaben;
        $this->mediengutscheine = $mediengutscheine;
    }

    public function ausgabe()
    {
        //Aufruf von Guthaben Anzeigen View und Übergabe des Guthabens und des Punktestands
        echo '<form id="myForm" action="/includes/guthaben_anzeigen.php" method="post">';
        echo '<input type="hidden" name="erzieltePunkte" value="' . $this->erzieltePunkte . '">';
        echo '<input type="hidden" name="totalPunkte" value="' . $this->punkteGuthaben . '">';
        echo '<input type="hidden" name="guthaben" value="' . $this->mediengutscheine . '">';

        echo  '</form>';
        echo '<script type="text/javascript">';
        echo "document.getElementById('myForm').submit()";
        echo '</script>';
    }
}
