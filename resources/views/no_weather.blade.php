<html>
    <head>
        <title>Weather</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 60px;
            }
        </style>
    </head>
    <body>
    dddmbmkj
        <div class="container">
            <div class="content">
                <div class="title">Sorry, no weather here :(
                    <img src="C:\wamp\www\laravel\public\refresh.jpeg">
                    <input type="image" src="C:\wamp\www\laravel\public\refresh.jpeg" alt="Submit">
                    <img src="file:///C:/wamp/www/laravel/public/refresh.jpeg" alt="альтернативный текст">

                </div>

            </div>
            <br/><a href="{{$town}}/refresh">refresh</a><br/>
        </div>
    </body>
</html>