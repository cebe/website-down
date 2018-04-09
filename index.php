<?php

http_response_code(503);

?>
<!DOCTYPE html>
<html>
<head>

    <style>
        body {
            /* photo from https://www.flickr.com/photos/volvob12b/8096359087/in/photostream/ License: Public Domain */
            background: #262734 url("/bg_sm.jpg") no-repeat top center;
            background-size: 100%;

            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: bolder;
        }

        #info {
            margin: 50px auto;
            max-width: 600px;

            background: rgba(255,255,255,0.75);
            padding: 25px 50px;
        }

        #info h1 {
            margin: 0;
            font-size: 25pt;
        }

        #info p {
            font-size: 14pt;
        }

        #logo {
            margin: 50px;
            height: 50px;
        }

    </style>

    <title>yiiframework.com</title>
</head>
<body>

<img id="logo" src="/logo.svg" alt="Yii Framework Logo" />

<div id="info">
    <h1>We are moving <em>yiiframework.com</em> to a new server...</h1>

    <p>
        We are currently deploying the new website for <em>yiiframework.com</em>.
        The estimated time frame for that is March 23, 2018 from 8:00 to 12:00 UTC.
    </p>
    <p>
        The website content is not available during the deployment.
        You may read the documentation at <a href="http://stuff.cebe.cc/yii2docs/">http://stuff.cebe.cc/yii2docs/</a>.
    </p>
    <p>
        If you need help with Yii, we are avilable in the
        <a href="https://join.slack.com/t/yii/shared_invite/MjIxMjMxMTk5MTU1LTE1MDE3MDAwMzMtM2VkMTMyMjY1Ng">Slack chat</a>
        and on <a href="https://webchat.freenode.net/?channels=yii">IRC <code>#yii</code> on freenode</a>.
    </p>
</div>


</body>
</html>
