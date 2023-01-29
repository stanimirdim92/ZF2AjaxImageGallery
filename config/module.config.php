<?php

return array(
    'router' => array(
        'routes' => array(
            'zf2-ajax-image-gallery' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/zf2-ajax-image-gallery',
                    'defaults' => array(
                        '__NAMESPACE__' => 'ZF2AjaxImageGallery\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'ZF2AjaxImageGallery\Controller\Index' => 'ZF2AjaxImageGallery\Factory\Controller\IndexControllerFactory',
        ),
    ),
    'form_elements' => array(
        'factories' => array(
            'ZF2AjaxImageGallery\Form\AjaxImageUploadForm' => 'ZF2AjaxImageGallery\Factory\Form\AjaxImageUploadFormFactory',
        ),
    ),

    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
        'template_path_stack' => array(
            'zf2-ajax-image-gallery' => __DIR__.'/../view',
        ),
    ),
);
