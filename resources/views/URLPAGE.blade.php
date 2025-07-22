<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header{
            background-color: aqua;
            padding: 30px;
            margin: 10px;
            width: fit-content;
        }
    </style>
</head>
<body>
    <header>Hi ! Welcome to Short URL . Your token is <p><i>{{$token}}</i></p> </header>
    @if ($token)
    <center>
    <form action="/GenerateURL" method="POST">
        @csrf
        <h3>Enter URL details here </h3>
        <div>
        Actual URL <input name="BeforeURL" type="text">
        </div>
        <div>
        Short URL <input name="DesiredURL" type="text" placeholder="Enter your desired Short url">
        </div>
        <div>
           Duration <input type="text" name="duration" placeholder="30" value="30">
        </div>
        <div>
        <button>Generate</button>
        </div>
    </form>
    @else
    <h4>You have no Token ur not authorized to use this application
    @endif
    <center>
</body>
</html>
