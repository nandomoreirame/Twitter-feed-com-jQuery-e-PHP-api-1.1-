<?php
/**
 * Tutorial: Twitter feed com jQuery e PHP (api 1.1)
 *
 * @author   Fernando Moreira <f@nandomoreria.me>
 * @license  MIT License
 * @link     http://nandomoreira.me/twitter-feed-com-jquery-e-php-api-1-1/
 */

ini_set('display_errors', 1);

// Simple PHP Wrapper for Twitter API v1.1 calls
// https://github.com/J7mbo/twitter-api-php
require_once 'TwitterAPIExchange.php';

$username = 'nando_dev'; // node do usuario
$count    = '20'; // numero de tweets que sera exibido

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token'        => "120261365-1Hd2h6YYqz9VxI9sqbAoTQF13XlxVdSzXhvLLgGS",
    'oauth_access_token_secret' => "mqxRCFgGkv3yTTOcsdPMqrXHbglFCC0F0HNXESat3PZZC",
    'consumer_key'              => "r1Cf23ZNojdIR2kZqqqb3g",
    'consumer_secret'           => "zb43TNnzu45YL2P2zjO1oMF0FmDqLMgG1OBCCfs0"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$requestMethod = 'GET';
$getfield = '?username='.$username.'&count='.$count;