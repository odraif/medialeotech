<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Loading...</title>
    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    <link href="https://fonts.cdnfonts.com/css/tajawal" rel="stylesheet">
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="https://kit.fontawesome.com/a4e771fc9a.js" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <nav>
            <div class="nav-logo">
                <a href="/"><img src="{{ asset('images/logo.png') }}" alt=""></a>
            </div>
            <div class="nav-menu hide-nav-menu">
                <div class="nav-link">
                    <a href="/">Home</a>
                    <a href="/#aboutus">About us</a>
                    <a href="/#service">Service</a>
                    <a href="/offer">Hiring</a>
                </div>
                <div class="nav-dropbox">
                    <button class="action-btn">Account</button>
                    <div class="nav-dropbox-menu hide-menu">
                        <button>Login</button>
                        <button>Sign up</button>
                    </div>
                </div>
                <div>
                    <div id="google_translate_element"></div>
                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en'
                            }, 'google_translate_element');
                        }
                    </script>

                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                    </script>
                </div>
            </div>
            <div class="nav-menu-btn">
                <button class="menu-btn">&#9776;</button>
            </div>

        </nav>
    </header>
    <div>
        @yield('content')
    </div>
    <footer>
        <div class="footer-content">
            <div class="footer-design">
            </div>
            <div class="footer-nav">
                <div class="footer-logo">
                    <a href="/"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                </div>
                <div class="footer-links">
                    <a href="/">Home</a>
                    <a href="/#service">Service</a>
                    <a href="/#aboutus">About us</a>
                </div>
                <div class="footer-contact">
                    <div class="phones">
                        <a href="tel:+212528222211">+212528-222211</a>
                        <a href="tel:+212661160909">+212661-160909</a>
                    </div>
                    <div class="social-media">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-x-twitter"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-foot">
            <p>&copy;2023-medialeotech</p>
        </div>
    </footer>
</body>

</html>
<script async>
    // dropbox action
    let actionBtn = document.querySelector(".action-btn");
    let menu = document.querySelector(".nav-dropbox-menu");

    let menuBtn = document.querySelectorAll(".nav-dropbox-menu button");

    menuBtn.forEach(btn => {
        btn.addEventListener("click", () => {
            location.href = "/under-development"
        })
    });

    actionBtn.addEventListener('click', () => {

        menu.classList.toggle('show-menu');
        menu.classList.toggle('hide-menu');
    });
    // auto hide dropbox
    document.addEventListener('click', (event) => {
        if (!event.target.closest(".nav-dropbox")) {
            menu.classList.remove('show-menu');
            menu.classList.add('hide-menu');
        }
    });



    // nav menu action
    let MenuBtn = document.querySelector(".menu-btn");
    let navmenu = document.querySelector(".nav-menu");
    let nav = document.querySelector('nav');

    MenuBtn.addEventListener('click', () => {
        navmenu.classList.toggle('hide-nav-menu');
        navmenu.classList.toggle('show-nav-menu');
        if (!(window.scrollY > window.innerHeight - 40)) return nav.classList.toggle("nav-event");
    });

    var paths = ["/Branding", "/marketing", "/Web-Development"]

    window.addEventListener('scroll', () => {
        navmenu.classList.remove('show-nav-menu');
        navmenu.classList.add('hide-nav-menu');
        if (!paths.includes(window.location.pathname)) {
            if (window.scrollY > window.innerHeight - 60) {
                nav.classList.add("nav-event");
            } else {
                nav.classList.remove("nav-event");
            }
        } else {
            if (window.scrollY == 0) {
                nav.classList.remove("nav-event");
            } else {
                nav.classList.add("nav-event");
            }
        }
    })
</script>
