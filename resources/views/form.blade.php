<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel form</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

</head>
<body>
<h1>Hello, form</h1>

{!! Form::open(['url' => 'send-mail']) !!}


{{Form::text('name')}}
{{Form::text('email')}}
{{Form::textarea('msg')}}
{{Form::submit('Send')}}




{!! Form::close() !!}



</body>
</html>
