var WT_SOCKET;

$( document ).ready(function() {
    var host = "ws://ceosim.cl:1234";

    try{
        WT_SOCKET = new WebSocket(host); 
        console.log('Estado del websocket '+ WT_SOCKET.readyState);
        WT_SOCKET.onopen    = function(msg){ console.log("Apreton de manos "); };
        WT_SOCKET.onmessage = function(msg){ WT_SOCKET_MENSAJE(msg.data); };
        WT_SOCKET.onclose   = function(msg){ console.log("Desconectado por el servidor "); };
    }
    catch(ex){
        console.log(ex);
    }
});

//funciones de socket
function WT_SOCKET_CLOSE(){
    log("Goodbye!");
    WT_SOCKET.close();
    WT_SOCKET = null;
}

function WT_SOCKET_SEND(){
    var txt;

    txt = $("#WT_input_chat").val();
    $("#WT_input_chat").val("");
    $("#WT_input_chat").focus();

    if(!txt){
        alert("No puedes enviar un mensaje vacío");
        return;
    }

    try{
        WT_SOCKET.send(txt);
    }
    catch(ex){
        log(ex);
    }
}

function WT_SOCKET_MENSAJE(msg){

    msg = JSON.parse(msg)
    if (msg.action == "ready"){

        if (Match_nuevo == true){

            $.getJSON(appUrl + "match/getusers/" + Match, function(data) {
                WT_SOCKET.send('{"action":"postNewMatch", "users":' + JSON.stringify(data) + ' }');
            });
        }
    }
    console.log(msg);
}