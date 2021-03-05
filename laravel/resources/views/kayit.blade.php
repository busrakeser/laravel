<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation üye Kaydı</title>
</head>
<body>
<div style="background-color: red">
{{--    validation kurallarına uymadığında verilen hataları basma--}}
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</div>
<form action="{{ route('kayit') }}" method="Post">
    @csrf
<label>Ad Soyad</label>
<input type="text" name="ad"><br>
<label>Kllanıcı Adı</label>
<input type="text" name="kadi"><br>
<label>Email</label>
<input type="email" name="email"><br>
<label>Şifre</label>
<input type="password" name="sifre"><br>
<label>Şifre Tekrar</label>
<input type="password" name="sifre_confirmation"><br>
<button type="submit">Kayıt Ol</button>
</form>

{{--veritabanındaki verileri yazdırma--}}
<div>
{{--    @foreach($user as $item)--}}
{{--        {{ $item->name }}--}}
{{--    @endforeach--}}
</div>


</body>
</html>
