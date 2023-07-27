<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help Page</title>
    <link rel="stylesheet" href="{{ asset('css/help.css') }}">

   
</head>
<body>
    @include('components.navbar')

    <div>
        <div class='upLeft'>
            <h3>How to sell my NFT?</h3>
            <ul>
                <li>as soon as you enter our site hit the upload button at the top right corner.</li>
                <li>after hitting enter, you should upload your image from your device and fill all the necessary information needed</li>
                <li>finally, submit your form and your image is uploaded</li>
            </ul>
        </div>
        <div class='middle' ></div>
        <div class='bottomRight'>
            <h3>How to make offer for an NFT?</h3>
            <ul>
                <li>as soon as you enter our site, there are a wide range of images that you can choose and buy.</li>
                <li> Click the image you want to buy and click the make offer button </li>
                <li>then choose which way you want to make your payment with (crypto or credit card)</li>
                <li>Finally, click complete purchase and your transaction is completed.</li>
            </ul>
        </div>

    </div>
    @include('components.footer')



</body>
</html>
