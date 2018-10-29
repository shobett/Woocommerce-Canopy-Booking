<?php

class WCB_ACF_Fields {
    public function load_fields() {
        if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_5b9a99cc823ec',
            'title' => 'Canopy Tour Information',
            'fields' => array(
                array(
                    'key' => 'field_5b9aad85037c5',
                    'label' => 'Schedule',
                    'name' => 'schedule',
                    'type' => 'tag_input',
                    'instructions' => 'Format: HH:MM',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'allowDuplicates' => 0,
                    'duplicateTagClass' => '',
                    'allowedTags' => '',
                    'regex' => '([01]?[0-9]|2[0-3]):[0-5][0-9]',
                ),
                array(
                    'key' => 'field_5b9be74362591',
                    'label' => 'Transportation stops',
                    'name' => 'transportation_stops',
                    'type' => 'relationship',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => array(
                        0 => 'transtops',
                    ),
                    'taxonomy' => array(
                    ),
                    'filters' => array(
                        0 => 'search',
                        1 => 'post_type',
                    ),
                    'elements' => '',
                    'min' => '',
                    'max' => '',
                    'return_format' => 'id',
                    'show_column' => 0,
                    'show_column_weight' => 1000,
                ),
                array(
                    'key' => 'field_5ba14a5d2081d',
                    'label' => 'Maximum number of adults',
                    'name' => 'maximum_number_of_adults',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '20',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'min' => 1,
                    'max' => 100,
                    'step' => 1,
                    'show_column' => 0,
                    'show_column_weight' => 1000,
                    'allow_quickedit' => 0,
                    'allow_bulkedit' => 0,
                ),
                array(
                    'key' => 'field_5ba14af52081e',
                    'label' => 'Maximum number of children',
                    'name' => 'maximum_number_of_children',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '20',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'min' => 1,
                    'max' => 100,
                    'step' => 1,
                    'show_column' => 0,
                    'show_column_weight' => 1000,
                    'allow_quickedit' => 0,
                    'allow_bulkedit' => 0,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'product',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'left',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
            'modified' => 1537297195,
        ));
        
        acf_add_local_field_group(array(
            'key' => 'group_5b9bec715c768',
            'title' => 'Transportation options',
            'fields' => array(
                array(
                    'key' => 'field_5b9bf83e6b05a',
                    'label' => '',
                    'name' => 'subtitle',
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
                    'placeholder' => 'Subtitle',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'show_column' => 0,
                    'show_column_weight' => 1000,
                    'allow_quickedit' => 0,
                    'allow_bulkedit' => 0,
                ),
                array(
                    'key' => 'field_5b9bf7081abb1',
                    'label' => 'Schedule',
                    'name' => 'schedule',
                    'type' => 'tag_input',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'allowDuplicates' => 0,
                    'duplicateTagClass' => '',
                    'allowedTags' => '',
                    'regex' => '([01]?[0-9]|2[0-3]):[0-5][0-9]',
                ),
                array(
                    'key' => 'field_5b9becb727bb1',
                    'label' => 'Address',
                    'name' => 'address',
                    'type' => 'google_map',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'center_lat' => '20.617',
                    'center_lng' => '-105.23018',
                    'zoom' => '',
                    'height' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'transtops',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'acf_after_title',
            'style' => 'seamless',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
            'modified' => 1536948308,
        ));
        
        acf_add_local_field_group(array(
            'key' => 'group_5bacfee5f08c2',
            'title' => 'WC Canopy Booking',
            'fields' => array(
                array(
                    'key' => 'field_5bacff178daec',
                    'label' => 'Dates',
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'left',
                    'endpoint' => 0,
                ),
                array(
                    'key' => 'field_5bad00438daef',
                    'label' => 'Blocked days',
                    'name' => 'blocked_days',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        0 => 'Sunday',
                        1 => 'Monday',
                        2 => 'Tuesday',
                        3 => 'Wednesday',
                        4 => 'Thursday',
                        5 => 'Friday',
                        6 => 'Saturday',
                    ),
                    'default_value' => array(
                    ),
                    'allow_null' => 1,
                    'multiple' => 1,
                    'ui' => 1,
                    'ajax' => 0,
                    'return_format' => 'value',
                    'show_column' => 0,
                    'show_column_weight' => 1000,
                    'allow_quickedit' => 0,
                    'allow_bulkedit' => 0,
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_5bacffb58daed',
                    'label' => 'Dates blocked',
                    'name' => 'dates_blocked',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'block',
                    'button_label' => 'Add date',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5bad0a1ca34f3',
                            'label' => 'Type',
                            'name' => 'type',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '20',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'single' => 'Only date',
                                'multi' => 'Date range',
                            ),
                            'default_value' => array(
                                0 => 'single',
                            ),
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'show_column' => 0,
                            'show_column_weight' => 1000,
                            'allow_quickedit' => 0,
                            'allow_bulkedit' => 0,
                            'placeholder' => '',
                        ),
                        array(
                            'key' => 'field_5bacfffd8daee',
                            'label' => 'Date',
                            'name' => 'date',
                            'type' => 'date_picker',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5bad0a1ca34f3',
                                        'operator' => '==',
                                        'value' => 'single',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '80',
                                'class' => '',
                                'id' => '',
                            ),
                            'display_format' => 'd/m/Y',
                            'return_format' => 'd/m/Y',
                            'first_day' => 1,
                            'show_column' => 0,
                            'show_column_weight' => 1000,
                            'allow_quickedit' => 0,
                            'allow_bulkedit' => 0,
                        ),
                        array(
                            'key' => 'field_5bad0aa2a34f4',
                            'label' => 'Date range',
                            'name' => 'date_range',
                            'type' => 'group',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5bad0a1ca34f3',
                                        'operator' => '==',
                                        'value' => 'multi',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '80',
                                'class' => '',
                                'id' => '',
                            ),
                            'layout' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_5bad0abda34f5',
                                    'label' => '',
                                    'name' => 'start',
                                    'type' => 'date_picker',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '50',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'display_format' => 'd/m/Y',
                                    'return_format' => 'd/m/Y',
                                    'first_day' => 1,
                                    'show_column' => 0,
                                    'show_column_weight' => 1000,
                                    'allow_quickedit' => 0,
                                    'allow_bulkedit' => 0,
                                ),
                                array(
                                    'key' => 'field_5bad0ae0a34f6',
                                    'label' => '',
                                    'name' => 'end',
                                    'type' => 'date_picker',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '50',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'display_format' => 'd/m/Y',
                                    'return_format' => 'd/m/Y',
                                    'first_day' => 1,
                                    'show_column' => 0,
                                    'show_column_weight' => 1000,
                                    'allow_quickedit' => 0,
                                    'allow_bulkedit' => 0,
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'field_5bd557e003199',
                    'label' => 'Discount',
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'left',
                    'endpoint' => 0,
                ),
                array(
                    'key' => 'field_5bd558080319a',
                    'label' => 'Enable discount for early booking',
                    'name' => 'enable_discount_for_early_booking',
                    'type' => 'true_false',
                    'instructions' => 'Enable the discount if the client reserves with x days in advance.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '20',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_5bd5586f0319b',
                    'label' => 'Days before the reservation',
                    'name' => 'days_before_the_reservation',
                    'type' => 'number',
                    'instructions' => 'The client has to book these days in advance for the discount to be applied.',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_5bd558080319a',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '40',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 30,
                    'placeholder' => 30,
                    'prepend' => '',
                    'append' => 'days',
                    'min' => 0,
                    'max' => 365,
                    'step' => 1,
                ),
                array(
                    'key' => 'field_5bd558ee0319c',
                    'label' => 'Percentage to discount',
                    'name' => 'percentage_to_discount',
                    'type' => 'text',
                    'instructions' => 'Percentage to discount if the rule is met.',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_5bd558080319a',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '40',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 15,
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '%',
                    'maxlength' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'wc-canopy-booking',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'acf_after_title',
            'style' => 'seamless',
            'label_placement' => 'left',
            'instruction_placement' => 'field',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
            'modified' => 1538067338,
        ));
        endif;
    }
}