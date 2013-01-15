<?php
<<<<<<< HEAD
	
/**
 *	TidePools Social WiFi
 *  Copyright (C) 2012 Jonathan Baldwin <jrbaldwin@gmail.com>
 *
 *	This file is part of TidePools <http://www.tidepools.co>

 *  TidePools is free software: you can redistribute it and/or modify
=======
/**
 *.---.      .                    .     
 *  |  o     |                    |     
 *  |  .  .-.| .-. .,-.  .-.  .-. | .--.
 *  |  | (   |(.-' |   )(   )(   )| `--.
 *  '-' `-`-'`-`--'|`-'  `-'  `-' `-`--' v0.2
 
 *  Copyright (C) 2012-2013 Open Technology Institute <tidepools@opentechinstitute.org>
 *	Lead: Jonathan Baldwin
 *	This file is part of Tidepools <http://www.tidepools.co>

 *  Tidepools is free software: you can redistribute it and/or modify
>>>>>>> origin/cleanup
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.

<<<<<<< HEAD
 *  TidePools is distributed in the hope that it will be useful,
=======
 *  Tidepools is distributed in the hope that it will be useful,
>>>>>>> origin/cleanup
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.

 *  You should have received a copy of the GNU General Public License
<<<<<<< HEAD
 *  along with TidePools.  If not, see <http://www.gnu.org/licenses/>.
 */


try 
{

    $m = new Mongo(); // connect
    $db = $m->selectDB("RedHook");
=======
 *  along with Tidepools.  If not, see <http://www.gnu.org/licenses/>.
 */

require('tidepools_variables.php');

try 
{
    $m = new Mongo(); // connect
    $db = $m->selectDB($DBname);
>>>>>>> origin/cleanup
}
catch ( MongoConnectionException $e ) 
{
    echo '<p>Couldn\'t connect to mongodb, is the "mongo" process running?</p>';
    exit();
}
<<<<<<< HEAD

	//if $_POST['landmark']=='buildings', etc. to pass correct landmark value
	
	$type = 'maps';
	$coll = $db->$type;
	

	
	$userID = $_GET['userID'];	
	
	
	$cursor = $coll->find(); //finding all public maps

	
	//this would usually only show public maps and hidden maps owned by user, but there is only one user for now
	
	//$cursor = $coll->find(array('permissions' => array('hidden' => 0))); //finding all public maps
	
	
	$cursor->sort(array('_id' => -1));  //sort maps by creation, newest first
		
	$cursor = iterator_to_array($cursor);
	
	$cursor = json_encode($cursor);

	
	print_r($cursor);
	

	
=======
	
	$type = 'maps';
	$coll = $db->$type;

	$userID = $_GET['userID'];	
	
	$cursor = $coll->find(); //finding all public maps

	//this would usually only show public maps and hidden maps owned by user, but there is only one user for now
	//$cursor = $coll->find(array('permissions' => array('hidden' => 0))); //finding all public maps
	
	$cursor->sort(array('_id' => -1));  //sort maps by creation, newest first
		
	$cursor = iterator_to_array($cursor);
	$cursor = json_encode($cursor);

	print_r($cursor);
>>>>>>> origin/cleanup
?>