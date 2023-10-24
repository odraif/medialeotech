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
            <form action="{{route("hiring-form")}}" class="offer-form" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="offer-logo">
                    <img src="{{asset('./images/logo.png')}}" alt="">
                </div>
                <div class="group">
                    <input required type="text" name="Prenom" class="input">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Fist name</label>
                </div>
                <div class="group">
                    <input required type="text" name="Nom" class="input">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Last name</label>
                </div>
                <div class="group">
                    <input required type="email" name="Email" class="input">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email</label>
                </div>
                <div class="group">
                    <input required type="text" name="Numero" class="input">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Phone number</label>
                </div>
                <div class="group-radio">
                    <div class="radio-input">
                        <input type="radio" name="offer" value="Demande de stage" required>
                        <p>Apply for an internship</p>
                    </div>
                    <div class="radio-input">
                        <input type="radio" name="offer" value="Demande d'emploi" required>
                        <p>Apply for a job</p>
                    </div>
                </div>
                <div class="cv-upload">
                    <p>Your CV:</p>
                    <input type="file" name="cv" value="votre cv" accept=".pdf" required>
                </div>
                <div class="submit-btn">
                    <input type="submit" value="Send">
                </div>
            </form>
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
