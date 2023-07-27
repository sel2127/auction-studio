<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>

    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    @include('components.navbar')

</head>

<body>
    <div class='form'>


        <div class='container'></div>
        <div class='row'>
            <h1>Contact Us</h1>
            <form id='contact-form' method='POST'>
                <label htmlFor='name'>Full Name</label>
                <input name='name' placeholder='Enter full name' type='text' />
                <label htmlFor='email'>Email</label>
                <input name='email' placeholder='Enter email' type='email' />
                <label htmlFor='feedback'>Message</label>
                <textarea rows="6" placeholder="Enter your message" name="feedback" required></textarea>
                <Link to="/contactSubmit"><button type="submit">Send</button></Link>
            </form>
        </div>
    </div>
    @include('components.footer')




</body>

</html>
