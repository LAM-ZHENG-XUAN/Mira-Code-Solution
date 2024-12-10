<style>
    .submenu {
        list-style: none;
        padding: 0;
        margin: 0;
        display: none; /* Initially hidden */
        background-color: #1a1f2e;
        position: absolute;
        top: 50px; /* Adjust based on your button position */
        right: 0; /* Aligns submenu to the button */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        z-index: 1000;
    }

    .submenu li {
        border-bottom: 1px solid #444; /* Optional: For separation */
    }

    .submenu li:last-child {
        border-bottom: none; /* Remove border for the last item */
    }

    .submenu a {
        color: #fff;
        display: block;
        padding: 10px 20px;
        text-decoration: none;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }

    .submenu a:hover {
        background-color: #333; /* Hover effect */
    }

</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuToggle = document.querySelector('.th-menu-toggle');
        const submenu = document.querySelector('.submenu');

        menuToggle.addEventListener('click', () => {
            if (submenu.style.display === 'block') {
                submenu.style.display = 'none';
            } else {
                submenu.style.display = 'block';
            }
        });

        // Optional: Close the submenu if clicked outside
        document.addEventListener('click', (event) => {
            if (!menuToggle.contains(event.target) && !submenu.contains(event.target)) {
                submenu.style.display = 'none';
            }
        });
    });

</script>
<!-- header.blade.php -->
<div class="cursor"></div>
<!--    <div class="cursor2"></div>-->
<!--    <div class="color-scheme-wrap active"><button class="switchIcon"><i class="fa-solid fa-palette"></i></button>-->
<!--        <h4 class="color-scheme-wrap-title"><i class="far fa-palette me-2"></i>Style Swicher</h4>-->
<!--        <div class="color-switch-btns"><button data-color="#3E66F3"><i class="fa-solid fa-droplet"></i></button> <button-->
<!--                data-color="#684DF4"><i class="fa-solid fa-droplet"></i></button> <button data-color="#008080"><i-->
<!--                    class="fa-solid fa-droplet"></i></button> <button data-color="#323F7C"><i-->
<!--                    class="fa-solid fa-droplet"></i></button> <button data-color="#FC3737"><i-->
<!--                    class="fa-solid fa-droplet"></i></button> <button data-color="#8a2be2"><i-->
<!--                    class="fa-solid fa-droplet"></i></button></div><a href="https://themeforest.net/user/themeholy"-->
<!--            class="th-btn text-center w-100"><i class="fa fa-shopping-cart me-2"></i> Purchase</a>-->
<!--    </div>-->
    <div id="preloader" class="preloader">
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span preloader-text="M" class="characters">M</span>
                    <span preloader-text="I" class="characters">I</span>
                    <span preloader-text="R" class="characters">R</span>
                    <span preloader-text="A" class="characters">A</span>
                    <span preloader-text="C" class="characters">C</span>
                    <span preloader-text="0" class="characters">0</span>
                    <span preloader-text="D" class="characters">D</span>
                    <span preloader-text="E" class="characters">E</span>
                </div>
            </div>
        </div>
    </div>
<header class="th-header header-layout2">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fas fa-map-location"><a href="https://maps.app.goo.gl/KaU3agNgbEUkq4kr8"></i>101-1, Jalan Molek 3/1, Taman Molek, 81100 Johor
                                Bahru, Johor</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:+60149356887">+6014-935-6887</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:miracode.app@gmail.com">miracode.app@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-social">
                        <span class="social-title">Follow Us On : </span>
                        <a href="https://www.facebook.com/miracodeapp/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/miracode.official/"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/+60149356887"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a class="icon-masking" href="index.php">
                                <span data-mask-src="assets/img/logo.svg" class="mask-icon"></span>
                                <img src="assets/img/icon/Asset+2-03.svg" alt="Webteck">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="service.php">Services</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header-button">
                            <button type="button" class="th-menu-toggle d-inline-block d-lg-none">
                                <i class="far fa-bars"></i>
                            </button>
                            <ul class="submenu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="service.php">Services</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
