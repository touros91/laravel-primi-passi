<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/aboutUs">About Us</a></li>
    </ul>
    <h1>{{$title}}</h1>
    <h3>Discover our office locations and different ways to contact us so that we can provide you with the support you need.</h3>
    <ul>
        @foreach ($contacts as $contact)
            <li>{{$contact}}</li>
        @endforeach
    </ul>
</body>
</html>