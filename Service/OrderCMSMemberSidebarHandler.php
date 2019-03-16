<?php

namespace Dywee\OrderCMSBundle\Service;

use Symfony\Component\Routing\Router;
use Symfony\Component\Routing\RouterInterface;

class OrderCMSMemberSidebarHandler
{
    /** @var RouterInterface  */
    private $router;

    /**
     * OrderCMSMemberSidebarHandler constructor.
     *
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * @return array
     */
    public function getSideBarMenuElement()
    {
        $menu = array(
            'key' => 'order',
            'children' => array(
                array(
                    'icon' => 'fa fa-area-chart',
                    'label' => 'Stat commandes',
                    'route' => $this->router->generate('order_cms_stat')
                ),
            )
        );

        return $menu;
    }
}