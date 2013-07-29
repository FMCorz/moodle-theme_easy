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

}
