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
 * 3 columns layout.
 *
 * Do not remove block regions (columns) from this file, instead edit config.php
 * to match the corresponding page types with another layout file.
 *
 * @package   theme_easy
 * @copyright 2013 Frédéric Massart
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Defining some extra classes depending Left-To-Right vs. Right-To-Left.
$mainregionid = 'region-bs-main-and-pre';
if (right_to_left()) {
    $mainregionid = 'region-bs-main-and-post';
}
?>

<?php echo $OUTPUT->element('head'); ?>

<?php echo $OUTPUT->element('header'); ?>

<div id="page" class="container-fluid">

    <?php echo $OUTPUT->element('page-header'); ?>

    <div id="page-content" class="row-fluid">
        <div id="<?php echo $mainregionid; ?>" class="span9">
            <div class="row-fluid">
                <section id="region-main" class="span8 pull-right">
                    <?php echo $OUTPUT->course_content_header(); ?>
                    <?php echo $OUTPUT->main_content(); ?>
                    <?php echo $OUTPUT->course_content_footer(); ?>
                </section>
                <?php echo $OUTPUT->blocks('side-pre', 'span4 desktop-first-column'); ?>
            </div>
        </div>
        <?php echo $OUTPUT->blocks('side-post', 'span3'); ?>
    </div>

    <?php echo $OUTPUT->element('page-footer'); ?>

</div>

<?php echo $OUTPUT->element('foot'); ?>
