@extends('layouts.app')

@section('content')

    <div id="content">
        <center style="width: 100%; display: flex; flex-direction: column; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px; text-align: center;">
            <h2><b>Нет интернета</b></h2>
            <h5>Проверьте интернет соединение или перезапустите приложение</h5>
            <a href="/home" style="margin-top: 18px;"><button class="btn btn-primary">Обновить</button></a>

        </center>
        <a href="#" id="protocolsOffline" style="width: 100%; position: absolute; left: 50%; transform: translateX(-50%); bottom: 0px; padding: 10px; text-align: center;">Вы так же можете создавать протоколы в офлайн режиме</a>
    </div>

@endsection