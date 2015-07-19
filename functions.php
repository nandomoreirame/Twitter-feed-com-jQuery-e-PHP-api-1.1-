<?php
/**
 * Tutorial: Twitter feed com jQuery e PHP (api 1.1)
 *
 * @author   Fernando Moreira <f@nandomoreria.me>
 * @license  MIT License
 * @link     http://nandomoreira.me/twitter-feed-com-jquery-e-php-api-1-1/
 */

function twitter_feed()
{
    global $url, $settings, $requestMethod, $getfield;

    $twitter = new TwitterAPIExchange($settings);
    $tw_data = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest(), true);

    if($tw_data)
    {
        if($tw_data["errors"][0]["message"] != "")
        {
            echo "<h3>Desculpe, ocorreu um problema.</h3><p>Twitter retornou a seguinte mensagem de erro:</p><p><em>".$tw_data[errors][0]["message"]."</em></p>";
            exit();
        }
        else
        {
            $twt_data = array();
            foreach ($tw_data as $i => $tw)
            {
                $twt_data[$i]['date']           = twitter_date_format($tw['created_at']);
                $twt_data[$i]['id']             = $tw['id'];
                $twt_data[$i]['avatar']         = $tw['user']['profile_image_url'];
                $twt_data[$i]['user']           = $tw['user']['screen_name'];
                $twt_data[$i]['text']           = $tw['text'];
                $twt_data[$i]['favorite_count'] = $tw['favorite_count'];
                $twt_data[$i]['retweet_count']  = $tw['retweet_count'];
            }

            return $twt_data;
        }
    }
    else
    {
        die('Problema: O twitter nao retornou nada! :( ');
    }
}


function twitter_date_format($date)
{
    // get current timestampt
    $current = strtotime("now");

    // get timestamp when tweet created
    $date = strtotime($date);

    // get difference
    $new_date = $current - $date;

    // calculate different time values
    $minute = 60;
    $hour   = $minute * 60;
    $day    = $hour * 24;
    $week   = $day * 7;

    if(is_numeric($new_date) && $new_date > 0)
    {
        // if less then 3 seconds
        if($new_date < 3) return "agora mesmo";

        // if less then minute
        if($new_date < $minute) return floor($new_date) . " segundos atrás";

        // if less then 2 minutes
        if($new_date < $minute * 2) return "cerca de 1 minuto atrás";

        // if less then hour
        if($new_date < $hour) return floor($new_date / $minute) . " minutos atrás";

        // if less then 2 hours
        if($new_date < $hour * 2) return "cerca de 1 hora atrás";

        // if less then day
        if($new_date < $day) return floor($new_date / $hour) . " horas atrás";

        // if more then day, but less then 2 days
        if($new_date > $day && $new_date < $day * 2) return "ontem";

        // if less then year
        if($new_date < $day * 365) return floor($new_date / $day) . " dias atrás";

        // else return more than a year
        return "mais de um ano atrás";
    }
}