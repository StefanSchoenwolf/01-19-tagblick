<?php
function tagblick_post_types() {
    register_post_type('event', array(
        'public'    =>  true,
        'labels'    =>  array(
            'name'  =>  'Events',
			'add_new_item'	=>	'Erstelle ein neues Event',
			'edit_item'		=>	'Event bearbeiten',
			'all_items'		=>	'Alle Events',
			'singular_name'	=>	'Event'
        ),
        'menu_icon'    => 'dashicons-calendar-alt'    
    ));
}
add_action('init', 'tagblick_post_types');