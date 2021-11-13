<html>
    <head>
        <meta charset="utf-8">
        <title>Форма</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="form">
{{ Form::open(['url' => route('create.createOrder'), 'method' => 'POST']) }}
    {{ Form::label('name', 'ФИО') }}
    {{ Form::text('name') }}<br>
    {{ Form::label('comment', 'Комментарий клиента') }}
    {{ Form::text('comment') }}<br>
    {{ Form::label('partNumber', 'Артикул товара') }}
    {{ Form::text('partNumber') }}<br>
    {{ Form::label('brand', 'Бренд товара') }}
    {{ Form::text('brand') }}<br>
    <button type="submit" class="btn"  name="id" value="5088">оформить заказ</button>
{{ Form::close() }}
</div>

    </body>
</html>
