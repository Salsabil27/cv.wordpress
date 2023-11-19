<?php 

function create_custom_posts() {
    register_post_type('skills', [
        'labels'=> [
           'name' => 'Skills'
        ],
 'public' => true, 
 'show_in_rest' => true
]);

register_post_type('langues', [
    'labels'=> [
       'name' => 'Mes Langues'
    ],
    'public' => true, 
]);
register_post_type('interet', [
    'labels'=> [
       'name' => 'Mes Interets'
    ],
    'public' => true, 
]);

register_post_type('xpro', [
    'labels'=> [
       'name' => 'Mes xp'
    ],
    'public' => true, 
]);
}
add_action('init','create_custom_posts');
