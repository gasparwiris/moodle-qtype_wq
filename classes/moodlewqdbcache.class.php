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
 * This class implements WIRIS cache interface
 * to store WIRIS Quizzes cache on Moodle database.
 *
 * @package    qtype
 * @subpackage wq
 * @copyright  Maths for More S.L. <info@wiris.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if (!class_exists('moodledbcache')) {
    require_once('moodledbcache.php');
}

class moodlewqdbcache {

    private $cache;

    public function __construct() {
        $this->cache = new moodledbcache('qtype_wq_variables', 'identifier', 'value');
    }

    public function get($key) {
        return $this->cache->get($key);
    }

    public function set($key, $value) {
        $this->cache->set($key, $value);
    }

    public function delete($key) {
        $this->cache->delete($key);
    }

    // @codingStandardsIgnoreStart
    public function deleteAll() {
    // @codingStandardsIgnoreEnd
        $this->cache->deleteAll();
    }
}
