<?php

/**
* Plugin Name: Plugin Test
* Plugin URI: 
* Description: Apenas um plugin para testar funcionalidades
* Version: 1.0
* Author: Fabiano Mendes
* Author URI: https://github.com/fabianoomendes
**/

// if (! defined('ABSPATH')){
//     die( 'Invalid request' );
// }

defined( 'ABSPATH' ) || exit;
// defined( 'ABSPATH' ) || exit('Não posso ser executado');
// defined( 'ABSPATH' ) || or die('Não posso ser executado');
// defined( 'ABSPATH' ) || die('Não posso ser executado');

class PluginTest {
    public function __construct()
    {
        add_action( 'init', array($this, 'create_custom_post_type_module') );
    }

    public function create_custom_post_type_modulo()
    {

    }

    public function activate()
    {

    }

    public function deactivate()
    {
        echo "Desativado";
    }

    public function uninstall()
    {

    }
}

if ( class_exists( 'AulaPlugin' ) ){
    $testModulo = new PluginTest();
    register_activation_hook( __FILE__,  array( $testModulo, 'activate' ) );
    register_deactivation_hook( __FILE__, array( $testModulo, 'deactivate' ) );
    register_uninstall_hook( __FILE__, array( $testModulo, 'uninstall' ) );
}