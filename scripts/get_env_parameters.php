<?php
/**
 * Created by PhpStorm.
 * User: marcoschnueriger
 * Date: 10.08.18
 * Time: 14:07
 */

$envString = file_get_contents('.env');

$envFile = str_replace("/_NEWLINE_/", "\n", $envString);

file_put_contents('.env', $envFile);