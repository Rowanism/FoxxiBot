<?php
// Copyright (C) 2020-2022 FoxxiBot
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.

// Check for Secure Connection
if (!defined("G_FW") or !constant("G_FW")) die("Direct access not allowed!");

if (!isset($_REQUEST['a'])) {
    include("twitter/twitter_index.php");
}

if (isset($_REQUEST['a'])) {

    if ($_REQUEST['a'] == "add") {
        include("twitter/twitter_add.php");
    }

    if ($_REQUEST['a'] == "edit") {
        include("twitter/twitter_edit.php");
    }

    if ($_REQUEST['a'] == "settings") {
        include("twitter/twitter_settings.php");
    }

    if ($_REQUEST['a'] == "funcs") {
        include("twitter/twitter_funcs.php");
    }

}