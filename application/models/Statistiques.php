<?php


class Model_Statistiques extends Zend_Db_Table 
{
    protected $_name = 'statistiques';
    protected $_primary = 'id';
    
    public $nbvisiteurs;
    public $nbcommentaires;
    public $nbactus;
    public $date;

}