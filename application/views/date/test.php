<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>

    <style>
        html,
        body {
        margin: 0;
        padding: 0;
        }

        * {
        transition: all 1s;
        }

        #x,
        #y {
        width: 50px;
        height: 50px;
        margin-left: 0;
        margin-top: 0;
        background: black;
        }

        #container {
        height: 100vh;
        width: 100vw;
        background: lightgrey;
        }

        #container:hover #x {
        margin-left: 50vw;
        }

        #container:hover #y {
        margin-top: 50vh;
        }
    </style>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <div id="container">
    <div id="result"></div>
    <div id="x"></div>
    <div id="y"></div>
    </div>
    <a href="asdfghjkl;">nothing</a>
    <script>
        var $x=$('#x');
        var $y=$('#y');
        var $result=$('#result');

        function updateDistance() {

        var lFirst = $x.offset().left;
        var lSecond = $y.offset().left;
        var ldist = parseInt(lFirst - lSecond);

        var tFirst = $x.offset().top;
        var tSecond = $y.offset().top;
        var tdist = parseInt(tFirst - tSecond);

        $result.text(parseInt(tdist + ldist));

        }

        setInterval(updateDistance, 100);
    </script>

    <script>
        (function( $ ) {
 
        $.fn.showLinkLocation = function() {

            this.filter( "a" ).each(function() {
                var link = $( this );
                link.append( " (" + link.attr( "href" ) + ")" );
            });

            return this;

        };

        }( jQuery ));

        // Usage example:
        console.log($( "a" ).showLinkLocation());;
    </script>
</body>
</html>