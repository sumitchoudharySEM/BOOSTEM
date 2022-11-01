<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ URL::asset('public/css/welcome.css') }}">
</head>

<body>
    <!-- navigation bar start -->
    <nav>
        <div class="max-width navbar">
            <div class="logo">
                <a href="">
                    <img src="{{ URL::asset('public/img/logo.png') }}" alt="Boostem" />
                </a>
            </div>
            <div class="menu">
                <div class="menu-item"><a class="menu-item-a" href="">Home</a></div>
                <div class="menu-item"><a class="menu-item-a" href="">About</a></div>
                <div class="menu-item">
                    <a class="menu-item-a" href="">Services</a>
                </div>
            </div>
            <div class="community-register-btn">
                <a href="{{ route('community.register') }}">
                    <button class="custom-btn btn-8">
                        <span>Register Community</span>
                    </button>
                </a>
            </div>
            <div class="hamburger">
                <img class="hamburgerwhite" src="{{ URL::asset('public/img/hamburgerwhite.png') }}" alt="menu" />
                <img class="hamburgerblack" src="{{ URL::asset('public/img/hamburger.png') }}" alt="menu" />
            </div>
        </div>
    </nav>
    <div class="black-cover"></div>
    <div class="mobilemenu">
        <a href="./communitypages/communityHome.html">
            <div class="mobile-menu-item"><a href="">Home</a></div>
        </a>
        <div class="mobile-menu-item"><a href="">About</a></div>
        <div class="mobile-menu-item"><a href="">Services</a></div>
    </div>
    <!-- navigation bar end  -->
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        {{-- @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}
    </div>
    <!-- header starts heair -->
    <div class="header">
        <img src="{{ URL::asset('public/img/background.png') }}" alt="" />
        <div class="header-content max-width">
            <h1>Boost your Community</h1>
            <h1>Empower the World</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam fugiat
                accusamus, in corrupti dolor recusandae vitae libero mollitia porro
                repudiandae et quia aliquid, perferendis tenetur!
            </p>
            <a href="{{ route('user.register') }}">
                <button>Join now</button>
            </a>
        </div>
    </div>
    <!-- header eng heair -->
    <!-- learn more start heair -->
    <div class="learn-more">
        <div class="learn-more-content max-width">
            <h1>
                register your great communiy <br />
                with us!
            </h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus
                at quibusdam dolor blanditiis enim natus magni tempore fugit? Possimus
                excepturi nostrum illo quia voluptatum libero. Pariatur ea perferendis
                quis eum nam esse, expedita totam deleniti Lorem, ipsum dolor..
            </p>
            <div class="button-wraper">
                <a href="{{ route('community.register') }}">
                    <button>Register Now</button>
                </a>
            </div>
        </div>
    </div>
    <!-- learn more ends heair -->
    <!-- intro video section starts heair -->
    <div class="intro-video">
        <div class="max-width">
            <div class="intro-video-left">
                <h2>Why with us ?</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    reprehenderit!
                </p>
                <div class="intro-video-content">
                    <img src="{{ URL::asset('public/icons/Compass.png') }}" alt="" />
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus ullam ratione totam.
                    </p>
                </div>
                <div class="intro-video-content">
                    <img src="{{ URL::asset('public/icons/Connect.png') }}" alt="" />
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus ullam ratione totam.
                    </p>
                </div>
                <div class="intro-video-content">
                    <img src="{{ URL::asset('public/icons/Teaching.png') }}" alt="" />
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus ullam ratione totam.
                    </p>
                </div>
            </div>
            <div class="intro-video-right">
                <img src="{{ URL::asset('public/img/leptop.png') }}" alt="" />
            </div>
        </div>
    </div>
    <!-- intro video section ends heair -->
    <!-- Services section starts heair -->
    <div class="Services">
        <div class="max-width">
            <div class="Services-left">
                <img src="./IMG/allinone.png" alt="" />
            </div>
            <div class="Services-right">
                <h2>Services</h2>
                <div class="Services-content">
                    <img src="./IMG/Globe.png" alt="" />
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus ullam ratione totam.
                    </p>
                </div>
                <div class="Services-content">
                    <img src="./IMG/Services.png" alt="" />
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus ullam ratione totam.
                    </p>
                </div>
                <div class="Services-content">
                    <img src="./IMG/Idea.png" alt="" />
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus ullam ratione totam.
                    </p>
                </div>
                <div class="Services-content">
                    <img src="./IMG/Puzzle.png" alt="" />
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus ullam ratione totam.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services section ends heair -->
    <!-- footer starts heair -->
    <footer>
        <div class="social-media">
            <div class="max-width">
                <p>Stay connected with us on :</p>
                <div class="social-media-icon">
                    <a href=""><img src="./IMG/Gmail Logo.png" alt="" /></a>
                    <a href=""><img src="./IMG/Instagram.png" alt="" /></a>
                    <a href=""><img src="./IMG/WhatsApp.png" alt="" /></a>
                    <a href=""><img src="./IMG/Telegram App.png" alt="" /></a>
                    <a href=""><img src="./IMG/Facebook.png" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="main-footer">
            <div class="max-width footer-grid">
                <div class="about">
                    <h2>Boostem</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quia
                        iusto, qui odit doloremque neque. Dolores autem provident
                        perspiciatis vitae saepe dignissimos? Nihil earum maxime tenetur
                        repellat corrupti, ipsam
                    </p>
                    <a href="">
                        <img src="./IMG/Home.png" alt="" />
                        <p>info.boostem@gmail.com</p>
                    </a>
                    <a href="">
                        <img src="./IMG/Phone.png" alt="" />
                        <p>+91 7987250919</p>
                    </a>
                </div>
                <div class="quick-links">
                    <h3>Quick links</h3>
                    <a href=""> About us </a>
                    <a href=""> your profile </a>
                    <a href=""> Discover </a>
                    <a href=""> upcoming events </a>
                </div>
                <div class="contact">
                    <h3>contact us</h3>
                    <form action="">
                        <input type="text" placeholder="Email :" />
                        <textarea type="texta" placeholder="Quiery :"></textarea>
                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer ends heair -->
    <script>
        const nav = document.querySelector("nav");
        const hamburger = document.querySelector(".hamburger");
        const mobilemenu = document.querySelector(".mobilemenu");
        const blackcover = document.querySelector(".black-cover");

        window.onscroll = function() {
            myFunction()
        };

        function myFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                nav.classList.add('white-nav');
            } else {
                nav.classList.remove('white-nav');
            }
        }

        function mobileMenu() {
            if (mobilemenu.classList.contains('show-mobilemenu')) {
                mobilemenu.classList.remove('show-mobilemenu');
                blackcover.style.display = "none";
            } else {
                mobilemenu.classList.add('show-mobilemenu');
                blackcover.style.display = "block";
            }
        }

        hamburger.addEventListener("click", mobileMenu);
    </script>
</body>

</html>
