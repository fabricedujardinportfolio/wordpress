<?php
/*
  Plugin Name: Mes shortcodes
  Description: Plugin fournissant des shortcodes
  Author: Fabrice
  Version: 1.0.0
 */
function bienvenue(){
    return "<h2>Bienvenue chez fabrice !</h2>";
}
add_shortcode('bienvenue', 'bienvenue');
