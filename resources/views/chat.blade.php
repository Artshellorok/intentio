@extends('layouts/master')

@section('content')
<div class="chatBox" id="chatBox">
    
    
    
</div>
<div style='width: 100%;'>
<textarea class="form-control tupafleximesketit12" id="exampleFormControlTextarea1" rows="3" placeholder='Введите сообщение...' style='display:block;'></textarea>
    <div style='display: block;margin: 0 auto; width: 25%'><button type="button" class="btn btn-tupaflex btn-primary">Отправить</button></div>
    <div style='padding-bottom: 200px;'></div>
</div>
<script>
    var channel = {{$id}};
    var socket = new WebSocket("ws://127.0.0.1:5000");
    var box = document.querySelector(".chatBox");
    var send = document.querySelector(".btn-tupaflex");
    var message = document.querySelector(".tupafleximesketit12");
    var nameBox = '@auth{{auth()->user()->email}}@endauth @if(auth()->guard('employer')->check()){{auth()->guard('employer')->user()->email}}@endif';
    socket.onclose = function(event) {
    if (event.wasClean) {
        alert('Соединение закрыто чисто');
    } else {
        alert('Обрыв соединения'); // например, "убит" процесс сервера
    }
    };
    socket.onmessage = function(event) {
        var resData = JSON.parse(event.data);
        if(resData.channel == channel){
            console.log(resData);
            if (resData.name == nameBox) {
            box.innerHTML += `<div><div id='request'  class='request'>${resData['message']}</div></div><div style='clear:both'></div>`;
            }
            else{
                box.innerHTML += `<div><div class="response"> 
                <strong>${resData['name']}</strong> 
                <br>${resData['message']}
            </div></div>`
            }
        }
    };
    send.onclick = function(){
        var sentData = JSON.stringify({message: message.value, name: nameBox, channel: channel});
        socket.send(sentData);
    };
    socket.onerror = function(error) {
        alert("Ошибка " + error.message);
    };
</script>
@endsection