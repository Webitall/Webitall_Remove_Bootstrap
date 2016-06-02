<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.Highlight
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_BASE') or die;

/**
 * System plugin to highlight terms.
 *
 * @package     Joomla.Plugin
 * @subpackage  System.Highlight
 * @since       2.5
 */
 class plgSystemWebitallremovebs extends JPlugin
 {
     public function onBeforeCompileHead()
     {
         // Application Object
         $app = JFactory::getApplication();

         // Frontend
         if( $app instanceof JApplicationSite )
         {
             $doc            = JFactory::getDocument();
             // Remove default bootstrap
             unset($doc->_scripts[JURI::root(true).'/media/jui/js/bootstrap.min.js']);
         }
     }
 }
