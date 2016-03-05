<html>
    <head>
        <title>Main page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <style>
            body, form, .text {
                margin: auto;
                width: 50%;
                padding: 10px;
                margin-top: 5%;
            }
            a {
                margin-left: 10px;
                margin-top: 10px;
            }

        </style>
    </head>
    <body>
            <div class="text">
                <p>This application was built for self-educational purposes.</p>
                <p>Technologies used to create this application.
                <ul><li>PHP 5.5 | Laravel 5.1</li>
                    <li>PostgreSQL 9.5</li>
                    <li>Hosted on Heroku</li>
                </ul></p>
            </div>
            <form action="/weather" method="POST" class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your town" name="town"/>
                    <input type="submit" class="btn btn-default" value="Add town">
                </div>
            </form></br>

            <?php
                $towns = DB::table('towns')->get();
                foreach ($towns as $town) {
                    $array = (array)$town;
                    $town = $array['town'];
                    echo "<a class='btn btn-default btn-lg' href='/weather/$town'</a>".$town;
            }
            ?>


    </body>
</html>