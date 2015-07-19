<?php
/**
 * Tutorial: Twitter feed com jQuery e PHP (api 1.1)
 *
 * @author   Fernando Moreira <f@nandomoreria.me>
 * @license  MIT License
 * @link     http://nandomoreira.me/twitter-feed-com-jquery-e-php-api-1-1/
 */

include 'config.php';
include 'functions.php';

$tweets = twitter_feed();
echo json_encode($tweets);
die();