<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
'key' => 'group_6082cf07bf9d5',
'title' => 'Contact Sub heading',
'fields' => array(
array(
'key' => 'field_6082cf1cc1f51',
'label' => 'Contact sub heading',
'name' => 'contact_sub_heading',
'type' => 'text',
'instructions' => '',
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
'maxlength' => '',
),
array(
'key' => 'field_6082d00bb2407',
'label' => 'Contact Description',
'name' => 'contact_description',
'type' => 'textarea',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'placeholder' => '',
'maxlength' => '',
'rows' => '',
'new_lines' => '',
),
),
'location' => array(
array(
array(
'param' => 'page_template',
'operator' => '==',
'value' => 'contact-page-template.php',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
));

acf_add_local_field_group(array(
'key' => 'group_6082d0b4d1e8b',
'title' => 'social_links',
'fields' => array(
array(
'key' => 'field_6082d0c8d3fdc',
'label' => 'Facebook',
'name' => 'facebook',
'type' => 'link',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'return_format' => 'url',
),
array(
'key' => 'field_6082d0d7d3fdd',
'label' => 'Twitter',
'name' => 'twitter',
'type' => 'link',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'return_format' => 'url',
),
array(
'key' => 'field_6082d0e9d3fde',
'label' => 'Github',
'name' => 'github',
'type' => 'link',
'instructions' => '',
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
'param' => 'user_form',
'operator' => '==',
'value' => 'all',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
));

endif;
?>