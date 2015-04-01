<?php

class StatistiquesController extends Zend_Controller_Action
{

    public function init()
    {
       $this->view->stat = new Model_Statistiques();
    }

    public function indexAction()
    {
        
    }


}

