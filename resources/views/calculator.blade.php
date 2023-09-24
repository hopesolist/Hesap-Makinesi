<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>

</head>
<body>
<form action="{{route('topla')}}" method="post">
    @csrf
    <input type="number" name="num1" required>
    <input type="number" name="num2" required>
    <button type="submit">Topla</button>
</form>
<form action="{{route('cikar')}}" method="post">
    @csrf
    <input type="number" name="num1" required>
    <input type="number" name="num2" required>
    <button type="submit">Çıkar</button>
</form>
<form action="{{route('bol')}}" method="post">
    @csrf
    <input type="number" name="num1" required>
    <input type="number" name="num2" required>
    <button type="submit">Böl</button>
</form>
<form action="{{route('carp')}}" method="post">
    @csrf
    <input type="number" name="num1" required>
    <input type="number" name="num2" required>
    <button type="submit">Çarp</button>
</form>
<h1>{{$result}}</h1>
</body>
</html>
