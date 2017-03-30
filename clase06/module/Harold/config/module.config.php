<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Harold\Controller\Harold' => 'Harold\Controller\HaroldController'
        ),
    ),
    'router' => array(
        'routes' => array(
            'harold' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/harold[/(:action)]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'Harold\Controller\Harold',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'harold/index/index' => __DIR__ . '/../view/harold/index/index.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            'harold' => __DIR__ . '/../view',
        ),
    ),
);


