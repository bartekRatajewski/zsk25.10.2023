<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane użytkownika</title>
</head>
<body>
<h3>Dane użytkownika:</h3>
<form action="UserFormController" method="get">

    <input type="text" name="fname" placeholder="Podaj imie" autofocus value="{{old('fname')}}">

    <input type="text" name="lname" placeholder="Podaj nazwisko" value="{{old('lname')}}">
   
    <input type="email" name="mail" placeholder="podaj email" value="{{old('mail')}}">
    
    <input type="submit" value="zatwierdź dane">
</form>
</body>
</html>