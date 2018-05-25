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
                'about' => ['text' => 'O nás', 'icon' => 'target'],
                // 'testimony' => ['text' => 'Svedectvá', 'icon' => 'chat'],
                'calendar' => ['text' => 'Kalendár', 'icon' => 'calendar'],
                'contact' => ['text' => 'Kontakt', 'icon' => 'pencil'],
            ],
        ],
        'weekend' => [
            'title' => 'Víkend',
            'target' => 'Weekend@index',
            'subfields' => [
                'start' => ['text' => 'Domov', 'icon' => 'home'],
                'info' => ['text' => 'Informácie', 'icon' => 'info'],
                'signup' => ['text' => 'Prihlasovanie', 'icon' => 'check'],
                'program' => ['text' => 'Program', 'icon' => 'list'],
                'theme' => ['text' => 'Téma', 'icon' => 'book'],
            ],
        ],
        'games' => [
            'title' => 'Games',
            'target' => 'Games@index',
            'subfields' => [
                'start' => ['text' => 'Domov', 'icon' => 'home'],
                'sports' => ['text' => 'Športy', 'icon' => 'grid-two-up'],
                'info' => ['text' => 'O Games', 'icon' => 'info'],
                'signup' => ['text' => 'Prihlasovanie', 'icon' => 'check'],
                'place' => ['text' => 'Miesto', 'icon' => 'map'],
                'gallery' => ['text' => 'Fotky', 'icon' => 'image'],
            ],
        ],
        'camp' => [
            'title' => 'Tábor',
            'target' => 'Camp@index',
            'subfields' => [
                'start' => ['text' => 'Domov', 'icon' => 'home'],
                'info' => ['text' => 'Informácie', 'icon' => 'info'],
                // 'signup' => ['text' => 'Prihlasovanie', 'icon' => 'check'],
                // 'program' => ['text' => 'Program', 'icon' => 'list'],
                // 'theme' => ['text' => 'Téma', 'icon' => 'book'],
                'gallery' => ['text' => 'Fotky', 'icon' => 'image'],
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

        if (!$this->_isThereActiveClass($menuItems)) {
            $menuItems[0]['class'] = 'active';
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
        // $currentController = $this->request->getParams('controller');
        // $currentAction = $this->request->getParams('action');
        $activeClass = 'active';

        if ($controller == $currentController) {
            return ($action == 'index' || ($action == $currentAction)) ? $activeClass : '';
        }

        return '';
    }

    protected function _isThereActiveClass($menuItems) {
        foreach ($menuItems as $menuItem) {
            if ($menuItem['class'] == 'active') {
                return true;
            }
        }
        return false;
    }
}
