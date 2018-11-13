<?php
/**
 * Created using IntelliJ IDEA.
 * User: mindgamesnl
 * Date: 18-9-18
 * Time: 12:36
 */

//get my api server
$json = file_get_contents('http://api.craftmend.com/efteling/all?key=doe maar niet stelen');
//decode
$rawData = json_decode($json);
