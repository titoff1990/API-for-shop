@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::open(['url' => route('create.orderCreation'), 'method' => 'POST']) }}
    {{ Form::label('name', 'ФИО') }}
    {{ Form::text('name') }}<br>
    {{ Form::label('comment', 'Комментарий клиента') }}
    {{ Form::text('comment') }}<br>
    {{ Form::label('part_number', 'Артикул товара') }}
    {{ Form::text('part_number') }}<br>
    {{ Form::label('brand', 'Бренд товара') }}
    {{ Form::text('brand') }}<br>
    {{ Form::submit('Оформить заказ') }}
{{ Form::close() }}
