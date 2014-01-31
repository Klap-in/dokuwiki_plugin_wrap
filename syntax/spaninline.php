<?php
/**
 * Div Syntax Component of the Wrap Plugin
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Anika Henke <anika@selfthinker.org>
 */

require_once(dirname(__FILE__).'/span.php');

class syntax_plugin_wrap_spaninline extends syntax_plugin_wrap_span {

    protected $entry_pattern = '<inline.*?>(?=.*?</inline>)';
    protected $exit_pattern  = '</inline>';


}

