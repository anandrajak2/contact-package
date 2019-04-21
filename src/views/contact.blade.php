<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Contact Us</title>
</head>
<body>
<h1>This is my first Package Form</h1>
<form action="{{url('contact')}}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="your name">
    </div>
    <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="email">
    </div>
    <div class="form-group">
        <input type="text" name="message" class="form-control" placeholder="message">
    </div>
    <button type="submit" class="btn btn-primary">send</button>
</form>
</body>
</html>
