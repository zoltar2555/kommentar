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
    
    function ajouterAction( )
    {
        $this->_helper->viewRenderer->setNoRender(true);
        $this->_helper->layout()->disableLayout();
        
        
        $actu_user = $this->getParam('actu', 'vide');
        $commentaire_user = $this->getParam('commentaire', 'vide');
        $contenu_user = $this->getParam('contenu', 'vide');
        
        $Commentaire = new Model_Commentaire();
        
        $data = array(
                    "actu_id"=>$actu_user,
                    "commentaire"=>$commentaire_user,
                    "auteur"=>$contenu_user,
                    "date"=> new Zend_Db_Expr('CURDATE()'));
        
        $Commentaire->insert($data);
        echo json_encode(array($actu_user,$commentaire_user,$contenu_user));
        
        
        
        return;
 
        
    }
    public function modifierAction()
    {
        
    }
    public function supprimerAction()
    {
        
    }

}

