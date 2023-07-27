<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us | Auction Studio</title>
    <link rel="stylesheet" href="{{ asset('css/About.css') }}">
</head>

<body>
    @include('components.navbar')

    <section class="about">
        <div class="aboutTop">
            <h1>About Us</h1>
        </div>
        <div class="aboutBottom">
            <h2>Our Story</h2>
            <p>Auction Studio is an online auction platform that offers exclusive access to some of the world's most
                sought-after art, antiques, and luxury items. Our platform is designed to provide a seamless, secure,
                and user-friendly bidding experience for collectors, enthusiasts, and buyers around the globe.</p>

            <h2>Our Mission</h2>
            <p>At Auction Studio, we pride ourselves on our expertise, professionalism, and commitment to exceptional
                customer service. Our team of experienced auctioneers, appraisers, and support staff work tirelessly to
                ensure that every auction is a success, and that our clients are satisfied with every aspect of their
                experience with us.</p>

            <h2>Meet Our Team</h2>
            <div class="team">
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member 1">
                    <h3>Selina Yeshanew</h3>
                    <p>CEO</p>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member 2">
                    <h3>Tselote Yonas</h3>
                    <p>COO</p>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member 3">
                    <h3>Tsion Moges</h3>
                    <p>Auctioneer</p>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
</body>

</html>
