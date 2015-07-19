/**
 * Tutorial: Twitter feed com jQuery e PHP (api 1.1)
 *
 * @author   Fernando Moreira <f@nandomoreria.me>
 * @license  MIT License
 * @link     http://nandomoreira.me/twitter-feed-com-jquery-e-php-api-1-1/
 */

(function ($) {
  $(window).load(function() {
    var tweets = $("#tweets"),
    html   = '<ul class="media-list">';

    $.ajax({
      url: "./ajax-tweets.php",
      dataType: 'json'
    })
    .done(function( data ) {
      $.each(data, function( i, tweet )
      {
        html += '<li class="media">';
        html += '<a class="pull-left" href="http://twitter.com/'+tweet.user+'" target="_blank">';
        html += '<img src="'+tweet.avatar+'" alt="Foto do perfil de '+tweet.user+'" class="img-circle">';
        html += '</a>';
        html += '<div class="media-body">';
        html += '<h4 class="media-heading">';
        html += '<a href="http://twitter.com/'+tweet.user+'" target="_blank">@'+tweet.user+'</a>';
        html += '<small>'+tweet.date+'</small>';
        html += '</h4>';
        html += '<p>'+ tweet.text +'</p>';
        html += '</div>';
        html += '</li>';
      });

      html += '</ul>';

      tweets.animate({ 'height':'300px' }, 200).html(html);
    });
  });
})(jQuery);
