<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Alucard\Controller\Index' => 'Alucard\Controller\IndexController',
        ),
    ),
    'router'=>array(
        'routes'=>array(
            'trabajo'=>array(
                 'type'=>'Segment',
                    'options'=>array(
                        
                        'route' => '/alucard[/[:action]]',
                        'constraints' => array(
                                'action'  =>  '[a-zA-Z][a-zA-Z0-9_-]*',
                        ),
                        
                        'defaults'  =>  array(
                                'controller' => 'Alucard\Controller\Index',
                                'action'     => 'index'
                         
                        ),
                    ),
           ),
       ),
    ),
    //Cargamos el view manager
   'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'alucard/index/index' => __DIR__ . '/../view/alucard/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
          'alucard' =>  __DIR__ . '/../view',
        ),
    ), 
);
