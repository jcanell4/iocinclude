<?php
/* Ace editor plugin for Dokuwiki
 * Copyright © 2011, 2012 Institut Obert de Catalunya
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * Ths program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

if (!defined('DOKU_INC')) die();

require_once DOKU_INC . 'lib/plugins/include/action.php';

class action_plugin_iocinclude extends action_plugin_include
{

//    /* @var helper_plugin_include $helper */
//    var $helper = null;

    function __construct()
    {
        $this->helper = plugin_load('helper', 'iocinclude');
    }
//
//    public function register(Doku_Event_Handler $controller){
//        $controller->register_hook('PARSER_HANDLER_DONE', 'BEFORE', $this, 'handle_parser');
//    }
}
