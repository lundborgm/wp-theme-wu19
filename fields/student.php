<?php

declare(strict_types=1);

if(function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
        'key' => 'group_5e5e556d9a619',
        'title' => 'Student info',
        'fields' => array(
            array(
                'key' => 'field_5e5e559044ddd',
                'label' => 'Email',
                'name' => 'email',
                'type' => 'email',
                'instructions' => 'Enter your email.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_5e5e55a344dde',
                'label' => 'GitHub Profile',
                'name' => 'github_profile',
                'type' => 'link',
                'instructions' => 'Link to your GitHub profile.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'student',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;