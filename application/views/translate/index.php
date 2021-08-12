<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Translate API</title>
</head>
<body>
    <input type="text">
    <p><?= isset($output) ? $output : ''; ?></p>

    <script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
    <script>
        function translate(data, target, language){
            const settings = {
                "async": true,
                // "crossDomain": true,
                "url": "<?= base_url('translate/api'); ?>",
                "method": "POST",
                "data": {
                    "q": data,
                    "target": target,
                    "language": language,
                }
            };

            $.ajax(settings).done(function (response) {
                var data = JSON.parse(response);
                var output = data.hasOwnProperty('data') ? data.data.translations[0].translatedText : response;
                $('p').html(output);
                // console.log(response.json());
            });
        }

        $('input').on('blur', function(){
            translate($(this).val(), 'hi', 'en');
            // var a = '{"data":{"translations":[{"translatedText":"¡Hola Mundo!"}]}}';
            // console.log(a.json());
        });
    </script>
</body>
</html>