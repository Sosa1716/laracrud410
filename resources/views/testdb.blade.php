<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vsta desde la base de datos</title>
</head>
<body>
    <section>
        <h3>informacion desde la base de datos</h3>
        <p>{{$client->client_name}}
            {{ $client->first_last_name }}
            {{ $client->second_last_name }}
        </p>
        
    </section>
</body>
</html>
