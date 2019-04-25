$(document).ready(function(){
    $(".cab").mousedown(function(){
        valor=$(this).data("valor");
        pos=$(this).data("pos");
        if(pos=="arriba"){
            cad="";
            for(i=1; i<=100; i++){
                cad=cad+"#"+valor+i+",";
            }
            $(cad+"#D").css("background-color","#C6C6C6");
        }else{   
            Letras = new Array("","A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
            cad="";
            for(i=1; i<=27; i++){
                cad=cad+"#"+Letras[i]+valor+",";
            }  
            $(cad+"#D").css("background-color","#C6C6C6");
        }
    });

    $(".cab").mouseup(function(){
        valor=$(this).data("valor");
        pos=$(this).data("pos");
        if(pos=="arriba"){
            cad="";
            for(i=1; i<=100; i++){
                cad=cad+"#"+valor+i+",";
            }
            $(cad+"#D").css("background-color","#fff");
        }
        else{
            Letras = new Array("","A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
            cad="";
            for(i=1; i<=27; i++){
                cad=cad+"#"+Letras[i]+valor+",";
            }  
            $(cad+"#D").css("background-color","#fff");
        }
    });
    
    $(".celda").mouseenter(function(){
        letra=$(this).data("letra");
        num=$(this).data("num");
        $("#cel_"+letra).css("background-color","#666");
        $("#cel_"+letra).css("border-bottom","2px solid #000");
        $("#cel_"+num).css("background-color","#666");
        $("#cel_"+num).css("border-right","2px solid #000");
    });

    $(".celda").mouseleave(function(){
        letra=$(this).data("letra");
        num=$(this).data("num");
        $("#cel_"+letra).css("background-color","#ccc");
        $("#cel_"+letra).css("border-bottom","2px solid #ccc");
        $("#cel_"+num).css("background-color","#ccc");
        $("#cel_"+num).css("border-right","2px solid #ccc");
    });

    ULTIMACELDA_L="";
    ULTIMACELDA_N="";

    $(".celda").dblclick(function(){
        letra=$(this).data("letra");
        num=$(this).data("num");

        if($(this).html()==""){
            $(this).html("<input type='text' class='cuadro_texto' id='input_"+letra+num+"' />");
            $("#input_"+letra+num).focus();
        }else{
            valor_input=$("#input_"+letra+num).val();
            if(typeof(valor_input) === "undefined"){ 
                valor_input=$("#"+letra+num).html();
            }
             $(this).html("<input type='text' value='"+valor_input+"' class='cuadro_texto' id='input_"+letra+num+"' />");
            $("#input_"+letra+num).focus();
        }
        ULTIMACELDA_L=letra;
        ULTIMACELDA_N=num;
    });

    ultima_celda_mouse_l="";
    ultima_celda_mouse_n="";

    $(".celda").click(function(){
        $(this).css("border","solid 1px #000"); //pone borde
         if(ultima_celda_mouse_l!=""){   
              $("#"+ultima_celda_mouse_l+ultima_celda_mouse_n).css("border","solid 1px #ccc");
        }
    
        if(ULTIMACELDA_L!=""){
              $("#" + ULTIMACELDA_L + ULTIMACELDA_N).html($("#input_" + ULTIMACELDA_L + ULTIMACELDA_N).val());
        }
        ultima_celda_mouse_l=$(this).data("letra");
        ultima_celda_mouse_n=$(this).data("num");
        //ejecuta formula
        valor_capturado=$("#"+ULTIMACELDA_L+ULTIMACELDA_N).html()
        if(valor_capturado.substr(0, 7)=="=sumar("){
            valor_capturado=valor_capturado.substr(7,valor_capturado.length-8)
            celdas = valor_capturado.split(",");//convierte en array
            s=0;
            for(i=0;i<celdas.length;i++){
                s=s+parseFloat($("#"+celdas[i]).html());
            }
            $(this).html(s);  
        }
    });

    $(".celda").keypress(function(e){
         var code = (e.keyCode ? e.keyCode : e.which);
        if(code==13){
            $(this).click();
        }
        });	 
});

function disableselect(e){
    return false
}

function reEnable(){
    return true
}

document.onselectstart = new Function ("return false")
if(window.sidebar){
    document.onmousedown=disableselect
    document.onclick=reEnable
}