<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Page</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">


</head>

<body>
    @include('components.navbar')


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $image->imagePath }}" alt="{{ $image->photoname }}" class="img-fluid">
            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <th><strong>Photo Name</strong></th>
                        <th><strong>Description</strong></th>
                        <th><strong>Photographer</strong></th>
                        <th><strong>Floor Price</strong></th>
                    </tr>
                    <tr>
                        <td>{{ $image->photoname }}</td>
                        <td>{{ $image->description }}</td>
                        <td>{{ $image->photographer }}</td>
                        <td>${{ $image->floorprice }}</td>

                    </tr>
                </table>
                <a href="{{ route('register') }}"><button type="submit" class="btn">Make Offer</button></a>
            </div>
        </div>
    </div>

    @include('components.footer');

</body>

</html>
