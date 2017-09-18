+<?php
 +
 +// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php
 +
 +include ('line-bot-api/php/line-bot.php');
 +
 +$channelSecret = '0f43574790e46143b791b69c337e0109';
 +$access_token  = 'KiSzajI19pKONtFP3cfCD3oZZjs3oY1X3a/NIhY5PnQ+aO6jEOHLHRG2L+fBuD46d0BXMOGYWbcNb1JGI8fkZgh9YKWXQQ9n96f6T1LEJshYkHqBQ+cWbOYqpd6D/HZmZvz3Tm5vFp6mYPGRrlmRAgdB04t89/1O/w1cDnyilFU=';
 +
 +$bot = new BOT_API($channelSecret, $access_token);
 +	
 +if (!empty($bot->isEvents)) {
 +		
 +	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));
 +
 +	if ($bot->isSuccess()) {
 +		echo 'Succeeded!';
 +		exit();
 +	}
 +
 +	// Failed
 +	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
 +	exit();
 +
 +}
