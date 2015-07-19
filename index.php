<?php
/**
 * Tutorial: Twitter feed com jQuery e PHP (api 1.1)
 *
 * @author   Fernando Moreira <f@nandomoreria.me>
 * @license  MIT License
 * @link     http://nandomoreira.me/twitter-feed-com-jquery-e-php-api-1-1/
 */
?><!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />

<!--
| by Fernando Moreira <f@nandomoreira.me>
-->

<title> Twitter feed com Ajax e PHP (api 1.1) </title>
<meta name="robots" content="noindex,nofollow" />

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- style -->
<link href="./css/style.css" rel="stylesheet" />
</head>
<body>

    <!-- #main -->
    <main id="main">

        <div class="container">

            <div class="page-header text-center">
                <h1> Twitter feed com Ajax e PHP <small>(api 1.1)</small> </h1>
            </div>

            <div class="col-md-6 col-md-offset-3">

                <aside class="tweets-box">
                    <div class="tweets-header">
                        <h3>Tweets</h3>
                    </div>

                    <div id="tweets">
                        <div class="text-center">
                            <img src="images/loader.gif" height="11" width="43" alt="loader">
                        </div>
                    </div>

                </aside>

            </div>

        </div>

    </main>
    <!-- /#main -->

<!-- Plugins js -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html><!-- by @nando_dev -->