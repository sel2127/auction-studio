<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auction Studio</title>
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">
    {{--  <link rel="stylesheet" href="{{ asset('css/app.css') }}">  --}}

</head>

<body>
    @include('components.navbar')

    <section class="cta">
        <div class="container">
            <h1> Auction Studio</h1>
             {{--  <p>Get access to exclusive auctions, discounts, and more.</p>  
            <a href="{{ route('explore') }}" class="btn btn-secondary">Explore More</a>  --}}
        </div>
    </section>



    @include('components.footer')
</body>

</html>
