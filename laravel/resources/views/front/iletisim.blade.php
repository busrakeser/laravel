<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>İletişim Sayfası</title>
</head>
<body>
<form method="Post" action="{{ route('iletisim.post') }}">
    @csrf
    <label>Ad Soyad</label>
    <input type="text" name="name"><br>
    <label>Email</label>
    <input type="email" name="email"><br>
    <label>İletişim Nedeni</label>
    <select name="subject">
        <option>İş Teklifi</option>
        <option>Destek</option>
    </select><br>
    <label>Mesajınız</label>
    <textarea name="message" id="message"  rows="3"></textarea>
    <button type="submit">Gönder</button>
</form>

</body>
</html>
