<?php
/*
<Orion, a web development framework for RK.>
Copyright (C) <2011>  <Orion>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
define('IN_NUCLEO', true);
require('./interfase/common.php');

$user->init(false, true);

$socket = curl_init();
curl_setopt($socket, CURLOPT_URL, 'http://graph.facebook.com/rockrepublik');
curl_setopt($socket, CURLOPT_VERBOSE, 0);
curl_setopt($socket, CURLOPT_HEADER, 0);
//curl_setopt($socket, CURLOPT_POST, 1);
curl_setopt($socket, CURLOPT_RETURNTRANSFER, 1);

$call = curl_exec($socket); 
if(!curl_errno($socket)) {
	$info = curl_getinfo($socket);
} else {
	$info = curl_error($socket);
}
curl_close($socket);

$facebook = json_decode($call);

if (isset($facebook->likes)) {
	$cache->save('fb_likes', $facebook->likes);
}

_pre($facebook->likes, true);

?>