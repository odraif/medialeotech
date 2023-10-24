<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiring</title>
</head>
<body>
    <div class="offer-page">

        <img src="{{asset("./images/Wave.svg")}}" class="offer-bgimage" alt="">
        <div class="offer-content">
          <div class="message-content">
            <div class="message-icon">
                <img src="{{asset("icons/check.png")}}"  alt="">
            </div>
            <div class="paragraphe">
                <p>Your request was sent successfully</p>
            </div>
          </div>
        </div>
        <div id="google_translate_element"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </div>
</body>
</html>
