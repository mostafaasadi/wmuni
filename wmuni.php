<?php
/**
 * Plugin Name: wmuni
 * Plugin URI: http://cyber.alkazem.ir
 * Description: A small widget for information in wordpress mu network blogs 
 * Version: 1.0
 * Author: Mostafa Asadi
 * Author URI: http://ma73.ir
 * License: GPL2
 */
 /*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : mostafaasadi73@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
class siteinfo extends WP_Widget {

function siteinfo() {
		$widget_ops = array(
		'classname' => 'Network Info',
		'description' => 'A small widget for information in wordpress mu network blogs'
);
$this->WP_Widget(
		'siteinfo',
		'Network Info',
		$widget_ops
);
}
          function widget($args, $instance) { // widget sidebar output
                    extract($args, EXTR_SKIP);
                    echo $before_widget; // pre-widget code from theme
# the html code you want to shown in widget
             echo '<ul>
	<li>
<h4><a href="http://wordpress.org/" target="_blank"><span style="color: #003300;"> The First </span></a></h4>
</li>
	<li>
<h4><a href="http://ma73.ir" target="_blank"><span style="color: #003300;">The Second</span> </a></h4>
</li>
</ul>';

			 wp_register();
			 wp_loginout();

                    echo $after_widget; // post-widget code from theme
          }
}

add_action(
          'widgets_init',
          create_function('','return register_widget("siteinfo");')
);
?>
