<?php

class CommentaireController extends Zend_Controller_Action
{

    public function init()
    {
        $this->view->comment = new Model_Commentaire();
    }

    public function indexAction()
    {
        // action body
    }
    
   public function ajouterAction( )
    {
        
    }
    public function modifierAction()
    {
        
    }
    public function supprimerAction()
    {
        
    }

}

