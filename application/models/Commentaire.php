<?php


class Model_Commentaire extends Zend_Db_Table 
{
    protected $_name = 'commentaire';
    protected $_primary = 'id';
    
    public $actu_id;
    public $commentaire;
    public $auteur;
    public $date;

}