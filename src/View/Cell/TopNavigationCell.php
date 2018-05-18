<?php
namespace App\View\Cell;

use Cake\Cache\Cache;
use Cake\Routing\Router;
use Cake\View\Cell;

/**
 * TopNavigation cell
 */
class TopNavigationCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    protected $_menuItems = [
        'home' => [
            'title' => 'Domov',
            'target' => 'Home@index',
            'subfields' => [
                'goal' => 'Cieľ',
                'testimony' => 'Svedectvá',
                'calendar' => 'Kalendár',
                'contact' => 'Kontakt',
            ],
        ],
        'weekend' => [
            'title' => 'Víkend',
            'target' => 'Weekend@index',
            'subfields' => [
                'domov' => 'Home',
                'info' => 'Info',
                'signup' => 'Prihlasovanie',
                'program' => 'Program',
                'theme' => 'Téma',
            ],
        ],
        'games' => [
            'title' => 'Games',
            'target' => 'Games@index',
            'subfields' => [
                'domov' => 'Home',
                'about' => 'O Games',
                'signup' => 'Prihlasovanie',
                'program' => 'Program',
                'theme' => 'Téma',
            ],
        ],
        'camp' => [
            'title' => 'Tábor',
            'target' => 'Camp@index',
            'subfields' => [
                'domov' => 'Home',
                'info' => 'Info',
                'signup' => 'Prihlasovanie',
                'program' => 'Program',
                'theme' => 'Téma',
            ],
        ],
        // 'contact' => [
        //     'title' => 'Kontakt',
        //     'target' => 'Contact@index',

        // ],
    ];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $menuItems = [];

        foreach ($this->_menuItems as $menuItem => $item) {
            list($controller, $action) = explode('@', $item['target'], 2);
            $data = [
                'name' => $menuItem,
                'title' => $item['title'],
                'class' => $this->_listActiveClass($controller, $action),
                'url' => Router::url(['controller' => $controller, 'action' => $action]),
                'subfields' => $item['subfields'],
            ];

            if (isset($item['subMenuFunction'])) {
                $data['subMenu'] = $this->{$item['subMenuFunction']}();
            }

            $menuItems[] = $data;
        }

        $this->set(compact('menuItems'));
    }

    /**
     * Return class for the list items
     * mainly to determine active subpage
     *
     * @param $controller
     * @param $action
     * @return string
     */
    protected function _listActiveClass($controller, $action)
    {
        $currentController = $this->request->params['controller'];
        $currentAction = $this->request->params['action'];
        $activeClass = 'active';

        if ($controller == $currentController) {
            return ($action == 'index' || ($action == $currentAction)) ? $activeClass : '';
        }

        return '';
    }
}
