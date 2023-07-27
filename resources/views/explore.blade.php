        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Explore Page</title>
            <link rel="stylesheet" href="{{ asset('css/explore.css') }}">

        </head>

        <body>
            @include('components.navbar')


            <h1> Arts</h1>

            <div class="explore">


                @foreach ($images as $image)
                    <div class="size">
                        <a href="{{ route('show', ['id' => $image->id]) }}">
                            <img class="size" src="{{ $image->imagePath }}" alt="{{ $image->photoname }}"></a>
                        <div class="name">
                            {{ $image->photoname }}

                        </div>
                        <div class="price">
                            ${{ $image->floorprice }}
                        </div>
                    </div>
                @endforeach
            </div>

            <section class="featured">
                <div class="container">
                    <h2>Featured Items</h2>
                    <div class="card-deck">
                        <div class="card">
                            <img src="{{ asset('images/t1.jpg') }}" height="80%" width="100%">
                            <div class="card-body">
                                <h5 class="card-title">Actor</h5>
                                <p class="card-text">Famous film actor</p>
                                {{--  <a href="/register" class="btn btn-primary">Bid Now</a>  --}}
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('images/t2.jpg') }}" height="80%" width="100%">
                            <div class="card-body">
                                <h5 class="card-title">Actor</h5>
                                <p class="card-text">Famous film actor</p>
                                {{--  <a href="/register" class="btn btn-primary">Bid Now</a>  --}}
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('images/t3.jpg') }}" height="80%" width="100%">
                            <div class="card-body">
                                <h5 class="card-title">Actor</h5>
                                <p class="card-text">Famous film actor</p>
                                {{--  <a href="/register" class="btn btn-primary">Bid Now</a>  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="testimonials">
                <div class="container">
                    <h2>What Our Customers Say</h2>
                    <div class="testimonial">
                        <img class="testimonial-image" src="{{ asset('images/John.jpg') }}" alt="John Smith">
                        <div class="testimonial-content">
                            <p>"I've been using Auction Studio for a few months now and I'm impressed with the quality
                                of items and the ease of use."</p>
                            <div class="testimonial-info">
                                <p class="testimonial-name">Yared Alemayehu</p>
                                <p class="testimonial-title">Customer</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <img class="testimonial-image" src="{{ asset('images/Heran.jpg') }}" alt="Jane Doe">
                        <div class="testimonial-content">
                            <p>"I recently won an auction on Auction Studio and the process was smooth and hassle-free.
                                I highly recommend this platform."</p>
                            <div class="testimonial-info">
                                <p class="testimonial-name">Heran Yoseph</p>
                                <p class="testimonial-title">Customer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>





            @include('components.footer')


        </body>

        </html>
