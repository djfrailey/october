<?php namespace October\Demo\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Dropdowns Back-end Controller
 */
class Dropdowns extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('October.Demo', 'demo', 'dropdowns');
    }
}
