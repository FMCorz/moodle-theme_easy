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

/**
 * The name of your theme.
 */
$THEME->name = 'easy';

/**
 * The list of CSS files (without the .css) to automatically load.
 * The order is important, it defines in which order the  files
 * will be included in <head>.
 */
$THEME->sheets = array('custom');

/**
 * All the settings described hereafter are more 'advanced', if you
 * are here for the first time, you probably do not need to go further.
 */

/**
 * The list of CSS files (without the .css) to use for the text editor.
 */

// $THEME->editor_sheets = array();

/**
 * The layout files.
 *
 * Each page has been attributed a page type. Each page type has
 * been associated to a specific layout file (see layout directory).
 * This theme inherits the page type association set in the parent theme.
 *
 * You can change the values defined by bootstrapbase by re-declaring
 * the variable $THEME->layouts here. Each page type has been declared
 * in bootstrapbase (see theme/bootstrapbase/config.php), so you only
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

// $THEME->layouts = array(
//     'frontpage' => array(
//         'file' => 'awesome.php',
//         'regions' => array('side-pre'),
//         'defaultregion' => 'side-pre',
//     )
// );

/**
 * Excluding stylesheets inherited from the parent.
 *
 * By default all the sheets defined in the parent theme will be included,
 * but they might be redundant or conflicting with yours.
 *
 * Please note that this does not exclude the editor sheets.
 *
 * This accepts multiple values:
 *
 * Ignore all the sheets from all the parents:
 *     $THEME->parents_exclude_sheets = true;
 *
 * Ignore all the sheets from the parent 'bootstrapbase':
 *     $THEME->parents_exclude_sheets = array('bootstrapbase' => true);
 *
 * And the following which only excludes moodle.css from bootstrapbase.
 */

// $THEME->parents_exclude_sheets = array(
//     'bootstrapbase' => array('moodle')
// );


/**
 * Excluding sheets from plugins.
 *
 * The same way this works for the parent themes, you can
 * exclude sheets from plugins. It also accepts mutilple values.
 */

// $THEME->plugins_exclude_sheets = array(
//     'pluginname' => array('sheet1', 'sheet2')
// );


/**
 * Enable docking of the blocks.
 *
 * When this setting is set to true the blocks can be docked.
 */

// $THEME->enable_dock = false;

/**
 * Javascript files.
 *
 * The names of all the javascript files in this theme that you would
 * like included from head, in order. Give the names of the files without .js.
 * Those files must be added to the directory javascript in your theme.
 * eg: theme/easy/javascript/onefile.js
 */

// $THEME->javascripts = array('onefile', 'anotherfile');

/**
 * Javascript files in footer.
 *
 * Works exacly like $THEME->javascripts, but includes the files at
 * the bottom of the <body>.
 */

// $THEME->javascripts_footer = array('footerscript');

/**
 * Excluding javascript files inherited from the parent.
 *
 * This works like $THEME->parent_exclude_sheets.
 */

// THEME->parents_exclude_javascripts = array(
//     'bootstrapbase' => array('ajsfile')
// );

/**
 * Right arrow-like character.
 *
 * It is used in the breadcrumb trail, course navigation menu
 * (previous/next activity), calendar, and search forum block.
 * Please DO NOT use < > » these are confusing for blind users.
 */

// $THEME->rarrow = '▶';

/**
 * Left arrow-like character.
 *
 * It is used in the course navigation menu (previous/next activity),
 * calendar, and search forum block.
 * Please DO NOT use < > » these are confusing for blind users.
 */

// $THEME->larrow = '◀';

/**
 * Post processing the CSS. (Advanced)
 *
 * This setting allows you to manipulate the CSS before it is
 * included in the HTML document. This setting expects the name of the
 * function that will do the post processing. By convention, the name of
 * this function should start by theme_yourthemename and be placed in
 * a file call lib.php.
 *
 * The function will receive 2 parameters, the first is the content of
 * the CSS file. The second is the theme_config object. The function
 * should return the modified version of the CSS.
 *
 * From Moodle 2.7 using $THEME->lessfile and associated callbacks
 * is a more flexible solution.
 */

// $THEME->csspostprocess = 'theme_easy_my_postprocess';

/**
 * The LESS file to compile. (Advanced)
 *
 * Since Moodle 2.7 it is possible to compile a LESS file on the fly. You
 * should not use this feature unless you want to dynamically change the
 * variables used in LESS dynamically. For instance if you have a settings
 * page that allows the user to change the background color, then you would
 * want to update the variable @bodyBackground accordingly, and directly
 * using a LESS file makes sense.
 *
 * The LESS file has to be located in the less/ folder of the theme. You
 * can only ever have one LESS file. In order to change the values of
 * the variables or add custom LESS content on the fly, you must also
 * declare the settings $THEME->lessvariablescallback and
 * $THEME->extralesscallback.
 *
 * In most cases if you use this setting you should not need to use
 * $THEME->sheets any more. Or at the very least you MUST not include any
 * compiled version of your LESS file as it would only duplicate the CSS.
 * More importantly the less file CANNOT have the same name as a file
 * declared in $THEME->sheets.
 *
 * Please note that $THEME->lessfile is NEVER inherited from
 * the parent theme. Also, as compiling LESS is a slow process, the compiled
 * file is cached, make sure that you turn designer mode on when you are
 * working on your theme.
 *
 * You can refer to the theme More (theme_more) as an example.
 */

// $THEME->lessfile = 'mybootstrap';

/**
 * Injecting LESS variables. (Advanced)
 *
 * Used in combination with $THEME->lessfile, this declares a callback
 * function to inject LESS variables. By convention, the name of
 * this function should start by theme_yourthemename and be placed in
 * a file call lib.php. That function must return an associative
 * array of variable names and values. For example, if you want to change
 * the variable @bodyBackground to #ffffff, you would return the following
 * array from the function:
 *
 *     array('bodyBackground' => '#ffffff');
 *
 * The first parameter passed to the function is the theme_config object.
 */

// $THEME->lessvariablescallback = 'theme_easy_less_variables';

/**
 * Injecting LESS content. (Advanced)
 *
 * Used in combination with $THEME->lessfile, this declares a callback
 * function to inject LESS code. By convention, the name of
 * this function should start by theme_yourthemename and be placed in
 * a file call lib.php. That function must return a string
 * containing LESS code. This code will be injected after the LESS content
 * of the file declared in $THEME->lessfile. If you want to dynamically
 * declare variables it is highly recommended that you use
 * $THEME->lessvariablescallback instead.
 */

// $THEME->extralesscallback = 'theme_easy_extra_less';

/**
 * None of the following settings should be modified.
 */

/**
 * The themes parent to this one.
 */
$THEME->parents = array('bootstrapbase');

/**
 * Disable CSS optimisation.
 *
 * Bootstrap does not support optimisation because it is minified.
 */
$THEME->supportscssoptimisation = false;

/**
 * The YUI CSS modules to include.
 *
 * Bootstrap doesn't require any of the YUI CSS modules.
 */
$THEME->yuicssmodules = array();

/**
 * Using renderers.
 *
 * Mandatory declaration to use renderers.
 */
$THEME->rendererfactory = 'theme_overridden_renderer_factory';

/**
 * Blocks in Right-to-left mode.
 *
 * What to do with the blocks when in RTL mode.
 */
$THEME->blockrtlmanipulations = array(
    'side-pre' => 'side-post',
    'side-post' => 'side-pre'
);
