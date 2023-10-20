@extends('layouts.main')
<!DOCTYPE html>

<script>
    document.title = 'Home'
</script>

@section('content')
    <div class="home-page-content">
        {{-- CTA --}}
        <div class="CTA">
            <div class="bg-image">
                <img src="{{ asset('images/background.webp') }}" alt="">
                <div class="filter"></div>
                <div class="cta-design"></div>
            </div>
            <div class="content">
                <h1>We Grow Brands Online</h1>
                <p>We believe the best works comes from deep
                    collaboration, clear goals and
                    exceptional teams.</p>
            </div>
            <div class="buttons">
                <button class="learn-more-btn">Learn more</button>
                <button class='contact-btn' onclick="open_contact_modal()">Contact us</button>
            </div>
            <div class="contact-modal">
                <div class="bg-modal hide-contact-modal">
                    <div class="modal">
                        <div class="modal__header">
                            <span class="modal__title">Contact</span>
                            <button class="button button--icon" onclick="close_contact_modal()"><svg width="24"
                                    viewBox="0 0 24 24" height="24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path
                                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                    </path>
                                </svg></button>
                        </div>
                        <img src="{{ asset('icons/check.png') }}" alt="" id="check"
                            style="margin: auto; width:20%;margin-top:30%;margin-bottom:30%">
                        <img src="{{ asset('icons/remove.png') }}" alt="" id="remove"
                            style="margin: auto; width:20%;margin-top:30%;margin-bottom:30%">
                        <form action="{{ route('contact-form') }}" method="post" onsubmit="submitContact(this)"
                            id="form">
                            @csrf
                            <div class="modal__body">
                                <div class="group">
                                    <input required="" type="text" name="Name" class="input">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Name</label>
                                </div>
                                <div class="group">
                                    <input required="" type="text" name="JobTitle" class="input">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Job Title / Role</label>
                                </div>
                                <div class="group">
                                    <input required="" type="email" name="Email" class="input">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>
                                <div class="group">
                                    <input required="" type="text" name="Phone" class="input">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Phone number</label>
                                </div>
                                <div class="group">
                                    <input required="" type="text" name="CompanyName" class="input">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Company Name</label>
                                </div>
                                <textarea name="message" placeholder="Your message"></textarea>
                            </div>
                            <div class="modal__footer">
                                <input type="submit" value="Send" class="button button--primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- END CTA --}}

        {{-- services --}}
        <div class="service" id="service">
            <div class="service-content">
                <div class="title">
                    <h2>Our Services</h2>
                    <div class="service-title-bar"></div>
                </div>
                <div class="service-cards">
                    <div class="service-card-box">
                        <a href="/marketing">
                            <div class="card">
                                <div class='card-logo'>
                                    <i class="fa-solid fa-bullhorn"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Marketing</h3>
                                </div>
                                <div class="card-design">
                                </div>
                            </div>
                        </a>
                        <a href="/Web-Development">
                            <div class="card">
                                <div class='card-logo'>
                                    <i class="fa-solid fa-code"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Web Development</h3>
                                </div>
                                <div class="card-design">
                                </div>
                            </div>
                        </a>
                        <a href="/Branding">
                            <div class="card">
                                <div class='card-logo'>
                                    <i class="fa-solid fa-swatchbook"></i>
                                </div>
                                <div class="card-title">
                                    <h3>Branding</h3>
                                </div>
                                <div class="card-design">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- END service --}}

        {{-- about us --}}
        <div class="about" id="aboutus">
            <div class="title">
                <h2>About us</h2>
                <div class="service-title-bar"></div>
            </div>
            <div class='about-container'>

                <div class='about-image-container'>
                    <div class="cub-1">
                    </div>
                    <div class="cub-2">
                    </div>
                    <div class="image1">
                        <img src={{ asset('images/aboutus.webp') }} alt="" />
                    </div>
                    <div class="image2">
                        <img src={{ asset('images/about.webp') }} alt="" />
                    </div>
                </div>
                <div class='about-text-container'>
                    <p>
                        With Media Leotech, you can rely on strategic and creative digital solutions
                        to help you stand out online. From auditing your presence to producing engaging
                        content, we put our expertise at your service. Thanks to our
                        team of seasoned professionals, we develop tailor-made strategies that will
                        boost your online visibility and strengthen your presence on social
                        networks.
                    </p>
                </div>
            </div>
        </div>
        {{-- END about us --}}

        {{-- why choose us --}}
        <div class="w-c-u">
            <div class="wcu-content">
                <div class="wcu-title">
                    <h3>Why choose us</h3>
                </div>
                <div class="wcu-card-box">
                    <div class="wcu-card">
                        <div class="wcu-card-content">
                            <div class="wcu-card-header">
                                <div class="wcu-card-icon">
                                    <img src="{{ asset('./icons/Untitled design(4).png') }}" alt="">
                                </div>
                                <div class="wcu-card-title">
                                    <h3>Branding Identity</h3>
                                </div>
                            </div>
                            <div class="text">
                                <div class="wcu-card-value">
                                    <p>
                                        We deploy tailor-made digital strategies to boost
                                        your brand's visibility on key
                                        channels: natural and paid search,
                                        social networks, display campaigns,
                                        etc. Your brand image will stand out in
                                        the eyes of your target audience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wcu-card">
                        <div class="wcu-card-content">
                            <div class="wcu-card-header">
                                <div class="wcu-card-icon">
                                    <img src="{{ asset('./icons/Untitled design(3).png') }}" alt="">
                                </div>
                                <div class="wcu-card-title">
                                    <h3>UI/UX Design</h3>
                                </div>
                            </div>
                            <div class="text">
                                <div class="wcu-card-value">
                                    <p>
                                        We deploy tailor-made digital strategies to boost
                                        your brand's visibility on key
                                        channels: natural and paid search,
                                        social networks, display campaigns,
                                        etc. Your brand image will stand out in
                                        the eyes of your target audience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wcu-card">
                        <div class="wcu-card-content">
                            <div class="wcu-card-header">
                                <div class="wcu-card-icon">
                                    <img src="{{ asset('./icons/illustration.png') }}" alt="">
                                </div>
                                <div class="wcu-card-title">
                                    <h3>Illustration</h3>
                                </div>
                            </div>
                            <div class="text">
                                <div class="wcu-card-value">
                                    <p>
                                        We deploy tailor-made digital strategies to boost
                                        your brand's visibility on key
                                        channels: natural and paid search,
                                        social networks, display campaigns,
                                        etc. Your brand image will stand out in
                                        the eyes of your target audience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wcu-card">
                        <div class="wcu-card-content">
                            <div class="wcu-card-header">
                                <div class="wcu-card-icon">
                                    <img src="{{ asset('./icons/curvature.png') }}" alt="">
                                </div>
                                <div class="wcu-card-title">
                                    <h3>Unique Design</h3>
                                </div>
                            </div>
                            <div class="text">
                                <div class="wcu-card-value">
                                    <p>
                                        We deploy tailor-made digital strategies to boost
                                        your brand's visibility on key
                                        channels: natural and paid search,
                                        social networks, display campaigns,
                                        etc. Your brand image will stand out in
                                        the eyes of your target audience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wcu-card">
                        <div class="wcu-card-content">
                            <div class="wcu-card-header">
                                <div class="wcu-card-icon">
                                    <img src="{{ asset('./icons/equalizer.png') }}" alt="">
                                </div>
                                <div class="wcu-card-title">
                                    <h3>Easy To Customize</h3>
                                </div>
                            </div>
                            <div class="text">
                                <div class="wcu-card-value">
                                    <p>
                                        We deploy tailor-made digital strategies to boost
                                        your brand's visibility on key
                                        channels: natural and paid search,
                                        social networks, display campaigns,
                                        etc. Your brand image will stand out in
                                        the eyes of your target audience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wcu-card">
                        <div class="wcu-card-content">
                            <div class="wcu-card-header">
                                <div class="wcu-card-icon">
                                    <img src="{{ asset('./icons/customer-service.png') }}" alt="">
                                </div>
                                <div class="wcu-card-title">
                                    <h3>Support</h3>
                                </div>
                            </div>
                            <div class="text">
                                <div class="wcu-card-value">
                                    <p>
                                        We deploy tailor-made digital strategies to boost
                                        your brand's visibility on key
                                        channels: natural and paid search,
                                        social networks, display campaigns,
                                        etc. Your brand image will stand out in
                                        the eyes of your target audience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- END why choose us --}}

        {{-- news letter --}}
        <div class="news-letter">
            <div class="news-letter-content">
                <form class="news-letter-form" action="{{ route('newsletter-form') }}" method="post"
                    onsubmit="submitNewsLetter(this)">
                    @csrf
                    <div class="news-letter-title">
                        <h2>Join the newsletter</h2>
                        <h4>Subscribe to get our lastest content by email</h4>
                    </div>
                    <div class="inputs">
                        <input type="email" placeholder="Your email" name="Email" required>
                        <button type="submit">Subscribe</button>
                    </div>
                    <p style="color:#fff;text-align:center" id="NL-alert">Thank you for subscribing!</p>
                </form>
            </div>
        </div>
        {{-- END news letter --}}
    </div>
    <script>
        function open_contact_modal() {
            console.log('open modal')
            let contactBtn = document.querySelector('.bg-modal');
            contactBtn.classList.remove("hide-contact-modal");
            contactBtn.classList.add("show-contact-modal");
        }

        function close_contact_modal() {
            console.log('close modal')
            let contactBtn = document.querySelector('.bg-modal');
            contactBtn.classList.remove("show-contact-modal");
            contactBtn.classList.add("hide-contact-modal");
        }

        var form = document.querySelector("#form");
        var check = document.querySelector("#check");
        var remove = document.querySelector("#remove")
        var NL = document.querySelector("#NL-alert")
        check.style.display = "none"
        remove.style.display = "none"
        NL.style.display = "none"

        function submitContact(form) {
            event.preventDefault();

            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();

            xhr.open('POST', "contact-form");

            xhr.onload = function() {
                if (xhr.status === 200) {
                    form.style.display = "none"
                    check.style.display = "block"
                    setTimeout(() => {
                        let contactBtn = document.querySelector('.bg-modal');
                        contactBtn.classList.remove("show-contact-modal");
                        contactBtn.classList.add("hide-contact-modal");
                    }, 1000);
                } else {
                    remove.style.display = "block"
                    form.style.display = "none"
                    setTimeout(() => {
                        remove.style.display = "none"
                        form.style.display = "block"
                    }, 1000);

                }
            };

            xhr.send(formData);
        }

        function submitNewsLetter(form) {
            event.preventDefault();

            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();

            xhr.open('POST', "newsletter-form");

            xhr.onload = function() {
                if (xhr.status === 200) {
                    NL.style.display = "block"
                } else {
                    NL.style.display = "block"
                    NL.innerText = "Please check your network before tying a again!"
                }
            };

            xhr.send(formData);
        }
    </script>
@endsection
