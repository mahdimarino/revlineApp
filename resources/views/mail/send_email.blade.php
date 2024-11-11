<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <p>Name: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Subject: {{ $data['subject'] }}</p>
    <p>Mobile: {{ $data['phone'] }}</p>
    <p>I am a/an: {{ $data['areyou'] }}</p>
    <p>Researching for: {{ $data['research'] }}</p>
    <p>looking to add a service at: {{ $data['howsoon'] }}</p>
    <p>My goals are: {{ $data['goals'] }}</p>
    <p>Would you like a RevLine Sales Rep to get in touch with you? : {{ $data['yesno'] }}</p>

</body>

</html>