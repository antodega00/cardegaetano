<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nuovo Messaggio dal Sito</title>
</head>
<body>
    <h2>Hai ricevuto un nuovo messaggio dal form di contatto</h2>
    <p><strong>Nome:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Telefono:</strong> {{ $data['phone'] }}</p>
    <p><strong>Messaggio:</strong></p>
    <p>{{ $data['text'] }}</p>
</body>
</html>
