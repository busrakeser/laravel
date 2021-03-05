<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anasayfa</title>
</head>
<body>
<h1>Anasayfa</h1>
<p>HomeController dan gelen veriyi kullanma</p>
{{--1--}}
{{--<?php echo $ad ?>--}}
{{--2--}}
{{--{{ $ad }}--}}

<p>if kullanımı</p>
{{--1--}}
<?php
if (1 > 0)
{
    echo "1 Büyüktür 0";
}
?>
<br>
{{--2--}}
@if(1<0) 1 Büyüktür 0 @else 0 Küçüktür 1 @endif

<br>
<p>İsset kullanımı</p>
{{--@isset($ad)--}}
{{--{{$ad}} isminde bir değişken var--}}
{{--@endisset--}}
<br>


<p>For kullanımı</p>
@for($i=0;$i<10;$i++)
    {{ $i }}
@endfor


<br>
<p>Foreach Kullanımı</p>
@foreach($names as $name)

{{--    <li>{{ $name }} - @if($loop->first) 1. isim @elseif($loop->last) son isim @endif</li>--}}
{{--    <li>{{ $loop->count }} kişi bulunmakta</li>--}}
    <li>{{ $loop->iteration }} - {{ $name }}</li>
@endforeach

{{--@include('aktarma')--}}
{{--<p>Aktarma sayfasına veri gönderme</p>--}}
@include('aktarma',['veri'=>'gönderi'])

<br>
<p>Html Taglarii ile veri gönderme</p>
{!! $blog !!}



</body>
</html>
