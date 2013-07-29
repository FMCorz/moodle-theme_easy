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
 * Easy config.
 *
 * @package   theme_easy
 * @copyright 2013 Frédéric Massart
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// The name of your theme.
$THEME->name = 'easy';

// The list of CSS files (without the .css) to automatically load.
$THEME->sheets = array('custom');

// The list of CSS files (without the .css) to use for the text editor.
$THEME->editor_sheets = array();

/**
 * Changing the layout.
 *
 * Each page has been attributed a page type. Each page type has
 * been associated to a specific layout file (see layout directory).
 * This theme inherits the page type association set in the parent theme.
 *
 * You can change the values defined by bootstrapbase by re-declaring
 * the variable $THEME->layouts here. Each page type has been declared
 * in bootstrabase (see theme/bootstrapbase/config.php), so you only
 * need to re-declare the ones you need to change.
 *
 * The following commented example attributes a new layout to
 * the page type 'frontpage'. The new layout is called 'awesome', which
 * means that I would have created the file layout/awesome.php.
 *
 * $THEME->layouts = array(
 *      'frontpage' => array(
 *          'file' => 'awesome.php',
 *          'regions' => array('side-pre'),
 *          'defaultregion' => 'side-pre',
 *      )
 *  );
 *
 * This also tells Moodle that only one block region (column) is being
 * used, and so all the content of the non-present block region should be
 * placed into the only visible region.
 *
 * If you want your design to switch from 3 columns to only 2, you need
 * to re-declare all the page types which are using the file 'columns3.php'.
 * In the new declaration, set the file to 'columns2.php'. Then, remove any
 * reference to the block region 'side-post' (and/or replace it with site-pre).
 *
 * A common pitfall is to use a region in the layout file, while forgetting
 * to declare it in the layout definition ($THEME->layouts).
 */

/**
 * None of the following settings should be modified.
 */

// The theme parent to this one.
$THEME->parents = array('bootstrapbase');

// Bootstrap does not support optimisation, it is already optimised.
$THEME->supportscssoptimisation = false;

// Bootstrap doesn't require any of the YUI CSS modules.
$THEME->yuicssmodules = array();

// Mandatory declaration to use renderers.
$THEME->rendererfactory = 'theme_overridden_renderer_factory';

// What to do with the blocks when in RTL mode.
$THEME->blockrtlmanipulations = array(
    'side-pre' => 'side-post',
    'side-post' => 'side-pre'
);
