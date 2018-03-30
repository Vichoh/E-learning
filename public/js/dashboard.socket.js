var WT_SOCKET;

$( document ).ready(function() {
    //crearElementoFlotante();
    //crearContenedorMensajes();
    //cargarChat();

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

    $("#matchGame").on("click", function(){
        var view = $(this).data("view");

        if (view == "play"){
            $(this).data("view", "end");
            $(this).html("Finalizadas");
        }
        else{
            $(this).data("view", "play");
            $(this).html("En Juego");
        }

        partidas();
    });
});

//Funciones para dashboard 
function partidas(){

    $('#gamesMatches').empty();
    var divPartidas ="";
    var contador = 0;
    var view =  $("#matchGame").data("view");
    
    $.getJSON(appUrl + "match/getAllPlayMatch/" + view, function (data) {
        $.each(data, function (key, val) {
                            
                if(val.state==0){
                    var state = "En Juego";
                }else if(val.state==1){
                    var state = "Pausada";
                }else{
                    var state = "Finalizada";
                }
                    
                var date = new Date(val.match_start*1000);
                divPartidas += '<div class="match-tracing rounded marketBox mt-3 ml-1" data-match="'+val.id_match+'" onclick="matchGame('+val.id_match+')"><div class="row pb-0"><table><tr style="width: 35%; border-bottom: 1px solid white"><td class="pr-2 text-primary" style="width: 35%; border-right: 1px solid white"><div class="badge pt-1 w-100 text-primary pb-2 pl-5 pr-5 "><i class="fa fa-fw fa-play-circle-o"></i> '+state+' <span class="arrow"></span></div></td><td class="text-center text-primary"><ul class="pt-2"><li class="list-inline-item"><i class="fa fa-fw fa-calendar"></i>' +date.toGMTString()+'</li><li class="list-inline-item"><i class="fa fa-fw fa-flag"></i>'+val.rounds+' Rondas</li><li class="list-inline-item"><i class="fa fa-fw fa-clock-o"></i>'+val.round_length+' min.</li><li class="list-inline-item"><i class="fa fa-fw fa-users"></i>'+val.teams_total+' Equipos</li><li class="list-inline-item"><i class="fa fa-fw fa-trophy"></i> '+val.market_diff+'</li></ul></td></tr><tr><td class="text-primary pr-2 pt-2 pb-2 text-center" style="width: 35%; border-right: 1px solid white; color:white"><i class="fa fa-fw fa-users"></i> '+val.team_name+'</td><td class="text-center text-primary" ><ul class="pt-2"><li class="list-inline-item"><i class="fa fa-cart-plus" style="color:white"></i> '+val.market_name+' - ' +val.market_desc+'</li></ul></td></tr></table></div></div>';
            contador++;
        });

        if (contador == 0){
            divPartidas = '<div class="alert alert-info mt-3" role="alert">Todavía no tienes invitaciones.</div>';
        }

        $('#gamesMatches').html(divPartidas);
    });
}


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

        WT_SOCKET.send('{"action":"getMatch"}');

    }else if (msg.action == "listMatch"){

        partidas();
    
    }
    console.log(msg);
}

// Funciones para el Chat
function crearElementoFlotante(){
    var HTML = '<div class="rounded-circle bg-danger p-4 text-white" style="position: fixed;right: 25px; bottom: 25px;z-index: 1030;"><i class="fa fa-commenting" aria-hidden="true"></i></div>';
    $("body").append(HTML);
}

function crearContenedorMensajes(){
    var Tarjeta = '<div class="card" style="height:100%;max-height:100%; width:100%; max-width:100%;"><div class="card-header bg-danger text-white" id="WT_mensajes_header">Mensajes</div><div class="card-block p-0" style="overflow-y:auto;" id="WT_mensajes_body"></div></div>';
    var HTML = '<div style="position: fixed;right: 25px; bottom: 20%;z-index: 1030;height:40%;max-height:40%; width:15%; max-width:15%;" id="WT_chat">'+ Tarjeta + '</div>';
    $("body").append(HTML);
}

function cargarChat(){

    $("#WT_mensajes_body").empty();
    $("#WT_mensajes_header").empty();

    var Chats = '<ul class="list-group"><li class="list-group-item wt-mensajes" data-team="" data-match="">Cras justo odio</li><li class="list-group-item wt-mensajes">Dapibus ac facilisis in</li><li class="list-group-item">Morbi leo risus</li><li class="list-group-item">Porta ac consectetur ac</li><li class="list-group-item">Vestibulum at eros</li></ul>';
    
    $("#WT_mensajes_body").html(Chats);
    $("#WT_mensajes_header").html("Mensajes");

    $(".wt-mensajes").on("click", function(){
        var chat_name = '<i class="fa fa-arrow-left wt-back-mensajes" aria-hidden="true"></i> ' + $(this).html();
        $("#WT_mensajes_header").empty();
        $("#WT_mensajes_body").empty();

        $("#WT_mensajes_header").html(chat_name);

        var mensajesHeader = '<div class="row m-0" style="height: 70%;overflow-y:auto;"><div class="col-12" id="WT_mensajes_list"><p class="bg-danger text-white p-1">Juan:<br>Donec ullamcorper nulla non metus auctor fringilla.</p><p class="bg-faded">Donec ullamcorper nulla non metus auctor fringilla.</p><p class="bg-danger text-white">Donec ullamcorper nulla non metus auctor fringilla.</p></div></div>';
        var mensajesFotter = '<div class="form-group row m-0"><div class="col-12"><div class="input-group"><input class="form-control" type="text" id="WT_input_chat"><button type="button" class="input-group-addon btn btn-danger" id="WT_input_send"><i class="fa fa-paper-plane" aria-hidden="true"></i></button></div></div></div>';

        $("#WT_mensajes_body").html(mensajesHeader + mensajesFotter);
        $(".wt-back-mensajes").on("click", function(){
            cargarChat();
        });
    });
}