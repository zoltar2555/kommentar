<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

   /**
   * View Initialisation
   */
  protected function _initViewConfig ()
  {
    $this->bootstrap('view');
    $_view = $this->getResource('view');
   
    $_view->headLink()->appendStylesheet( $_view->baseUrl() . "/css/bootstrap-3.3.4/css/bootstrap.min.css" );
    $_view->headLink()->appendStylesheet( $_view->baseUrl() . "/css/main.css" );
    $_view->headScript()->appendFile( $_view->baseUrl() . "/js/jquery/jquery.min.js" );
    $_view->headScript()->appendFile( $_view->baseUrl() . "/css/bootstrap-3.3.4/js/bootstrap.min.js" );
  }
  
  /**
   * Application Infos
   */
  protected function _initAppInfo ()
  {
      $_appinfo = new Zend_Config_Ini( APPLICATION_PATH . '/configs/application.ini', 'production');
      Zend_Registry::set('appName', $_appinfo->app->name);
      Zend_Registry::set('appVersion', $_appinfo->app->version);
  }
   /**
   * Modules Infos
   */
  protected function _initModulesInfo ()
  {
      $_modinfo = new Zend_Config_Ini( APPLICATION_PATH . '/configs/modules.ini', 'modules');
     
      Zend_Registry::set('modules', $_modinfo->mod);
     
  }

   /**
   * Init DB
   */
  protected function _initDbSettings ()
  {
    // on charge db dans le ini
    $this->bootstrap('db');
    Zend_Registry::set('Zend_Db', $this->getResource('db'));
  }
  
  
  protected function _initAutoloader ()
  {
    new Zend_Loader_Autoloader_Resource(
        array(
            'basePath' => APPLICATION_PATH,
            'namespace' => '',
            'resourceTypes' => array(
                'db' => array(
                    'path' => 'models',
                    'namespace' => 'Model'
                )
            )
        ));
  }
}