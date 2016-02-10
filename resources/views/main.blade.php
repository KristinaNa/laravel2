<html>
    <head>
        <title>Main page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <style>
            body, form {
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
            <form action="/weather" method="POST" class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your town" name="town"/>
                    <input type="submit" class="btn btn-default" value="Send">
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