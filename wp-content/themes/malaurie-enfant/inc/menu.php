<?php
class mono_walker extends Walker_Nav_Menu{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0 ){
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="'. esc_attr( $class_names ) . '"';

        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';

        //Récupère l'URL DE l'item
        $parsedURL = parse_url( esc_attr( $item->url ));
        //Supprime le dernier '/' de l'url
        $cleanURL = substr_replace($parsedURL['path'],'',-1);
        //On split la chaine sur les '/'
        $pathTab = explode('/',$cleanURL);
        //On modifie la chaine derrière le dernier '/'
        $pathTab[sizeof($pathTab)-1] = '#'.$pathTab[sizeof($pathTab)-1];
        //On reconstitue l'URL complète modifiée
        $path = implode('/',$pathTab );
        //On injecte la nouvelle URL dans le href de l'item
        $attributes .= !empty( $item->url ) ? ' href="'.$path.'"' : '';
        $cleanURL = substr_replace($parsedURL['path'],'',-1);//remove last '/';

        $pathTab = explode('/',$cleanURL);
        $pathTab[sizeof($pathTab)-1] = '#'.$pathTab[sizeof($pathTab)-1];
        $path = implode('/',$pathTab );

        $attributes .= ! empty( $item->url )        ? ' href="'   . $path .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' data-title="'   .   sanitize_title($item->title) .'"' : '';
        $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

        if($depth != 0) $description = "";

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
        $item_output .= $description.$args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
