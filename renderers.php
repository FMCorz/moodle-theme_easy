<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Easy renderers.
 *
 * @package   theme_easy
 * @copyright 2013 Frédéric Massart
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Class extending the core renderers of theme/bootstrapbase.
 */
require_once($CFG->dirroot . '/theme/bootstrapbase/renderers.php');
class theme_easy_core_renderer extends theme_bootstrapbase_core_renderer {

    // Re-declare in here the methods contained in the class core_renderer (see lib/outputrenderers.php),
    // to modify them. Please note that some might already be overridden in the direct parent of this
    // class (theme_bootstrapbase_core_renderer, see theme/bootstrapbase/renderers.php).
    //
    // The following is a commented example of a renderer for $OUTPUT->heading():
    // If you observe the original method, you will notice that I am only extending this renderer
    // to wrap it in a <div> tag.
    //
    // public function page_heading($tag = 'h1') {
    //     return "<div class='mycustomclass'><$tag>" . $this->page->heading . "</$tag></div>";
    // }
    //
    // I could also have done it like this:
    //
    // public function page_heading($tag = 'h1') {
    //     $html = parent::page_heading($tag);
    //     return "<div class='mycustomclass'>" . $html . "</div>";
    // }

    /**
     * Layout elements.
     *
     * This renderer does not override any existing renderer but provides a way of including
     * portion of files into your layout pages. Those portions are called 'elements' and are
     * located in the directory layout/elements of your theme.
     *
     * To include one of those elements in your layout (or other elements), use this:
     *
     *   <?php echo $OUTPUT->element('elementNameWithoutDotPHP'); ?>
     *
     * You can also pass some variables to your elements, by passing an array as the second argument.
     *
     *   $myvars = array('var1' => 'Hello', 'var2' => 'World');
     *   echo $OUTPUT->element('elementNameWithoutDotPHP', $myvars);
     *
     * Then, you can simply use the variables in your element, in our example your element could be:
     *
     *   <h1><?php echo $var1; ?> <?php echo $var2; ?></h1>
     *
     * You do not need to pass $CFG, $OUTPUT or $VARS, they are made available for you.
     *
     * @param string $name of the element, without .php.
     * @param array $vars associative array of variables.
     * @return string
     */
    public function element($name, $vars = array()) {
        global $CFG, $SITE, $USER;
        $OUTPUT = $this;
        $PAGE = $this->page;
        $COURSE = $this->page->course;

        $element = $name . '.php';
        $candidate = $this->page->theme->dir . '/layout/elements/' . $element;
        if (!is_readable($candidate)) {
            debugging("Could not include element $name.");
            return '';
        }

        extract($vars);
        ob_start();
        include($candidate);
        $output = ob_get_clean();
        return $output;
    }

}
