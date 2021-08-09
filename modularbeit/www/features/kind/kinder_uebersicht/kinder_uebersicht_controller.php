<?php
include_once  'kinder_uebersicht_view.php';


class Kinder_Uebesicht_Controller{


    public function __construct($id)
    {
       // $model = new KinderUebersichtModel($id);

        $view = new KinderUebersichtView();
        $view->ausgabe();

    }
    


}