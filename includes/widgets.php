<?php 
function mp_widgets() {
    register_sidebar ([
        'name'=> __('Blog Sidebar', 'mp'),
        'id'=> 'mp_sidebar',
        'description' => __('Sidebar for blog section', 'mp'),
        'before_widget'=>'<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'
    ]);
}