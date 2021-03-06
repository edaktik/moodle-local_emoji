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
 * Default alternative texts for Emoji emoticon images
 *
 * @package    local_emoji
 * @copyright  Moodle DevCamp 2018 {@link https://www.moodle-dach.eu}
 * @author     Andreas Grähn (andreas.graehn@edu-werkstatt.de)
 * @author     Amr Hourani (amr.hourani@id.ethz.ch)
 * @author     Andreas Hruska (andreas.hruska@edaktik.at)
 * @author     Loca Bösch (luca.boesch@bfh.ch)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Emoji';
$string['localemojiintro'] = 'This plugin provides two sets of SVG emoticons in order to replace the standard GIF emoticons. It will modify the configuration in <a href="settings.php?section=htmlsettings" target="_blank">HTML Settings</a> in order to use the icons provided by this plugin by changing "image component" to local_emoji and "image name" to s/name f/name or revert back to standard Moodle images. If you want to create your own SVG emoticon set the sourcefiles are provided as AI template files in the doc directory of this plugin. The smiley pictures have been released into the public domain by their author.';
$string['usestandardhead'] = 'Standard emojis in SVG format';
$string['usestandard'] = 'Use standard SVG emojis';
$string['usefancyhead'] = 'Fancy emojis in SVG format';
$string['usefancy'] = 'Use fancy SVG emojis';
$string['emoticonsreset'] = 'Reset emoticons to Moodle default GIF images';