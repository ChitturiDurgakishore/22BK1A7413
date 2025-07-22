<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border: 3px solid black;
            padding: 10px;
        }
        th{
            border: 3px solid black;
            padding: 10px;
        }
        tr{
            border: 3px solid black;
            padding: 10px;
        }
        td{
            border: 3px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <center>
    <h4>URL Details</h4>
     <table>
        <tr>
            <th>Originalurl</th>
            <th>Redirecturl</th>
            <th>clicks</th>
            <th>created</th>
            <th>expiry</th>
        </tr>
        <tr>
           <th>{{$details->originalurl}}</th>
            <th>{{$details->redirecturl}}</th>
            <th>{{$details->clicks}}</th>
            <th>{{$details->created}}</th>
            <th>{{$details->expiry}}</th>
        </tr>
     </table>
     </center>
</body>
</html>
