<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h5>Olá {!! $name !!}, tudo bem?</h5>
    <p>Você está matriculado no evento {!! $evento !!}.</p>
    <p>Que terá início ao dia <strong>{!! date('d/m/Y', strtotime($data)) !!}</strong></p>
    <p>==============================================================================</p>
    <p>==============================================================================</p>
    <h5>Obrigado por matrícular-se!</h5>
    <h4>Att, TesteTCC</h4>
</body>
</html>