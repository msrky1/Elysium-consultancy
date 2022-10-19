<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Gönderme</title>
</head>
<body>
     <h3> Gelen Email </h3>
      
     <p>  <h4> Adı Soyadı: </h4>   {{ $data['name'] }} </p>
 
     <p> <h4> Email Adresi: </h4>  {{ $data['email'] }} </p>
  <p> <h4> Telefon Numarası: </h4> {{ $data['phone'] }} </p>
   <p> <h4> Kısa Mesajı: </h4> {{ $data['description'] }} </p>
   
</body>
</html>