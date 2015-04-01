<?php


class Model_Actualite extends Zend_Db_Table 
{
    protected $_name = 'actualite';
    protected $_primary = 'id';
    
    public $categories;
    public $titres;
    public $nbcommentaires;
    public $contenu;
    public $image;
}