<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">


    <title>Footer</title>
</head>

<body>
    <footer>
        <div class="footer-container">
            <div class="footer-links">
                <h3>Quick Links</h3>

                <ul>
                    <li><a href="{{ url('explore') }}">Explore More</a></li>
                    <li><a href="{{ url('register') }}">Register</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('explore') }}">Offer</a></li>
                    <li><a href="{{ route('upload') }}">Upload</a></li>
                </ul>
            </div>
            <div class="social-link">
                <h3>Follow Us</h3>


                <x-bi-telegram />
                <x-bi-facebook />
                <x-bi-instagram />
                <x-bi-twitter />



                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-telegram"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-tiwtter"></i></a></li>

                </ul>
                <p>&copy; 2023 Photo auction. All rights reserved.</p>

            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i>Address, Addis Ababa, Ethiopia</li>
                    <li><i class="fas fa-envelope"></i><a
                            href="auction:info@photoauction.com">info@auctionstudio.com</a></li>
                    <li><i class="fas fa-phone"></i><a href="tel:+251-912-345-678">+251-911-223-344</a></li>

                </ul>


            </div>

        </div>

    </footer>

</body>

</html>
