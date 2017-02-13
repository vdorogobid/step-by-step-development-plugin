<?php
/**
 * Created by PhpStorm.
 * User: solomashenko
 * Date: 13.02.17
 * Time: 0:47
 */

namespace includes\models\admin\menu;


use includes\controllers\admin\menu\StepByStepICreatorInstance;

class StepByStepMainAdminMenuModel implements StepByStepICreatorInstance
{

    public function __construct(){
        add_action( 'admin_init', array( &$this, 'createOption' ) );

    }

    /**
     * Регистрировать опции
     * Добавлять поля опции
     * Добавлять секции опции

     */
    public function createOption()
    {
        // register_setting( $option_group, $option_name, $sanitize_callback );
        // Регистрирует новую опцию
        register_setting('StepByStepMainSettings', STEPBYSTEP_PlUGIN_OPTION_NAME, array(&$this, 'saveOption'));
        // add_settings_section( $id, $title, $callback, $page );
        // Добавление секции опций
        add_settings_section( 'step_by_step_account_id', __('Account', STEPBYSTEP_PlUGIN_TEXTDOMAIN), '', 'step_by_step_main' );

    }

    /**
     * Сохранение опции
     * @param $input
     */
    public function saveOption($input)
    {
        return $input;
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }
}