<!doctype html>
<html lang="en">
    <head>
        <title>Title></title>
        <!-- Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scaled=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.
        css" integrity="sha384-ggOyR0iXipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
</head>
<body>
    <form action=""{{url('/')}}/register" method="post">
        @csrf
        <div class="container">
            <x-input type="text" name="name" label="Enter your name"/>
            <x-input type="email" name="email" label="Enter your email"/>
            <x-input type="password" name="password" label="Enter your password"/>
            <x-input type="password" name="password_confirmation" label="Confirm your password"/>
         
            <button class="btn btn-primary">Submit</button>    
        </div>    
    </form>    
</body
</html>


