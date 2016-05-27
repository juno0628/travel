<!DOCTYPE html>
<html>
    <head>
        <title>Travelplanner</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                font-weight: 100;
                font-family: 'helvetica';
            }

            /*.container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }*/

/*            .content {
                text-align: center;
                display: inline-block;
            }
*/
            .title {
                font-size: 32px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Travel Planner</div>
                <br><br>
            </div>
            <div class="button-container">
                <div><button class='col-lg-6 default'><a href="/auth/login">Sign In</a></button></div>
                <div><button class='col-lg-6 default'><a href="/travelplans">Travel Plans</a></button></div>
                <div></div>
                <div id="youtube-list">
                  <iframe class="col-md-6" width="450" height="315" src="https://www.youtube.com/embed/xMfz1jlyQrw" frameborder="0"></iframe>

                    <iframe class="col-md-6" width="450" height="315" src="https://www.youtube.com/embed/bch1_Ep5M1s" frameborder="0"></iframe>
                </div>
            </div>
        </div>
        <br>
        <br>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
        </script>
    </body>
</html>
