<?php
// This file is part of the deferred all or nothing question behaviour for Moodle
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
 * Mobile output class for Adaptive feedback (all-or-nothing) question behaviour
 *
 * @package    qbehaviour_adaptiveallnothing
 * @copyright  2023 Daniel Thies <dethies@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qbehaviour_adaptiveallnothing\output;

/**
 * Mobile output class for Adaptive feedback (all-or-nothing) question behaviour
 *
 * @package    qbehaviour_adaptiveallnothing
 * @copyright  2023 Daniel Thies <dethies@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mobile {
    /**
     * Returns an empty template with javascrpt for qbehaviour_adaptiveallnothing
     * @param  array $args Arguments from tool_mobile_get_content WS
     * @return array HTML, javascript and otherdata
     */
    public static function mobile_qbehaviour_adaptiveallnothing($args) {
        $js = "
            const that = this, result = {
                handleQuestion: function(question) {
                    that.CoreQuestionHelperProvider.extractQbehaviourButtons(question);
                }
            };

            result;
        ";

        return [
            "templates" => [
                [
                    "id" => "adaptiveallnothing",
                    "html" => '',
                ],
            ],
            "otherdata" => "",
            "javascript" => $js,
            "files" => [],
        ];
    }
}
