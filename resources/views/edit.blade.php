<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Image Upload</title>
    <link rel="stylesheet" href="{{ asset('css/upload.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body>

     @include('components.navbar') 


    <div>
        <div class='title'>
            <h1>Update Photo</h1>
        </div>
         <div class='contact'>
            <form action="/image" encType='multipart/form-data' id='contact-form' method='POST'>
                @csrf
                <div class='left'>
                    <input id='chooseFile' type='file' name='file' />
                </div>
                <label htmlFor='name'>Photo Name</label>
                <input name='photoname' placeholder='Enter full name' type='text' required/>
                <label htmlFor='description'>Description</label>
                <textarea rows="6" placeholder="Enter your photo description" name="description" required></textarea>
                <label htmlFor='photographer'>Photographer</label>
                <input name='photographer' placeholder='Enter photographer name' type='text' required/>
                <label htmlFor='price'>Floor Price</label>
                <input name='floorprice' placeholder='Enter floor price' type='number' required/>
                <label htmlFor="date">Auction Duration</label>
                <input  id="cash-date" name="auctionduration" type="date" required>
                
               

                <button type='submit'>Submit</button>

            </form>
        </div>
    </div> 

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

      @include('components.footer')  

</body>
</html>