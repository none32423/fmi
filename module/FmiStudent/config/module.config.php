<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'FmiStudent\Controller\Index' => 'FmiStudent\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'album' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/fmi-student[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'FmiStudent\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'layout/FmiStudent'           => __DIR__ . '/../view/layout/FmiStudent.phtml',
        ),
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),

    ),
);