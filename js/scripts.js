//RECALCULAR
	function calcular()
        {	
        var cantidad = document.getElementById('cantidad').value;
        var precio = document.getElementById('precio').value;
        var subtotal = cantidad*precio;
       document.getElementById('subtotal').value = subtotal; 
                }
  


// COMBOS DINAMICOS
function syncSelects (padre , hijo1, hijo2, hijo3) 
{
hijo1.selectedIndex = padre.selectedIndex;
hijo2.selectedIndex = padre.selectedIndex;
hijo3.selectedIndex = padre.selectedIndex;
}


  
//RELOJ 12 HORAS  
  
  
function DetenerReloj12 () {
var RelojID12 = null  
var RelojEjecutandose12 = false  



    if(RelojEjecutandose12)  
        clearTimeout(RelojID12)  
    RelojEjecutandose12 = false  
}  
  
function MostrarHora12 () {  
    var ahora = new Date()  
    var horas = ahora.getHours()  
    var minutos = ahora.getMinutes()  
    var segundos = ahora.getSeconds()  
    var meridiano  
  
    //ajusta las horas  
    if (horas > 12) {  
        horas -= 12  
        meridiano = " P.M."  
    } else {  
        meridiano = " A.M."  
        }  
              
    //establece las horas  
    if (horas < 10)  
        ValorHora = "0" + horas  
    else  
        ValorHora = "" + horas  
  
    //establece los minutos  
    if (minutos < 10)  
        ValorHora += ":0" + minutos  
    else  
        ValorHora += ":" + minutos  
              
    //establece los segundos  
    if (segundos < 10)  
        ValorHora += ":0" + segundos  
    else  
        ValorHora += ":" + segundos  
          
    ValorHora += meridiano  
    document.reloj12.digitos.value = ValorHora  
  
    //si se desea tener el reloj en la barra de estado, reemplazar la anterior por esta  
    //window.status = ValorHora  
  
    RelojID12 = setTimeout("MostrarHora12()",1000)  
    RelojEjecutandose12 = true  
}  
  
function IniciarReloj12 () {  
    DetenerReloj12()  
    MostrarHora12()  
}  
  
window.onload = IniciarReloj12;  
if (document.captureEvents) {           //N4 requiere invocar la funcion captureEvents  
   // document.captureEvents(Event.LOAD)  
}    




// CALENDARIO DINAMICO

    $(document).ready(function(){
    $('#date1').datepicker({
        showOn: 'focus',
        //buttonText: 'Selecciona una fecha',
      //buttonImage: 'css/calendar.png',
        buttonImageOnly: true,
        showButtonPanel: false,
    });
$('#date2').datepicker({
        showOn: 'focus',
        //buttonText: 'Selecciona una fecha',
       // buttonImage: 'css/calendar.png',
        buttonImageOnly: true,
        showButtonPanel: false,
    });
    
});
    



//CONTADOR
var CronoID = null
var CronoEjecutandose = false
var decimas, segundos, minutos

function DetenerCrono (){
    if(CronoEjecutandose)
        clearTimeout(CronoID)
    CronoEjecutandose = false
}

function InicializarCrono () {
    //inicializa contadores globales
    segundos = 0
    minutos = 0
    horas = 0

    //pone a cero los marcadores
    document.crono.display.value = '00:00:00'
    
}

function MostrarCrono () {
           
    //incrementa el crono
    segundos++
    if ( segundos > 59 ) {
        segundos = 0
        minutos++
        if ( minutos > 59 ) {
            minutos = 0
            horas++
            if ( horas > 59 ) {
                alert('Fin de la cuenta')
                DetenerCrono()
                return true
            }
        }
    }

    //configura la salida
    var ValorCrono = ""
    ValorCrono = (horas < 10) ? "0" + horas : horas
    ValorCrono += (minutos < 10) ? ":0" + minutos : ":" + minutos
    ValorCrono += ":" + segundos 
            
    document.crono.display.value = ValorCrono

    CronoID = setTimeout("MostrarCrono()", 1000)
    CronoEjecutandose = true
    return true
}

function IniciarCrono () {
    DetenerCrono()
    InicializarCrono()
    MostrarCrono()
}




//CREAR DIVS DINAMICOS

num=0;
function crear(obj) {
  num++;
  fi = document.getElementById('fiel'); // 1
  contenedor = document.createElement('div'); // 2
  contenedor.id = 'div'+num; // 3
  fi.appendChild(contenedor); // 4

  ele = document.createElement('input'); // 5
  ele.type = 'text'; // 6
  ele.name = '1_'+num; // 6
  contenedor.appendChild(ele); // 7
  
  ele = document.createElement('input'); // 5
  ele.type = 'text'; // 6
  ele.name = '1_'+num; // 6
  contenedor.appendChild(ele); // 7
  
  ele = document.createElement('input'); // 5
  ele.type = 'text'; // 6
  ele.name = '1_'+num; // 6
  contenedor.appendChild(ele); // 7
  
  ele = document.createElement('input'); // 5
  ele.type = 'text'; // 6
  ele.name = '1_'+num; // 6
  contenedor.appendChild(ele); // 7
  
  ele = document.createElement('input'); // 5
  ele.type = 'text'; // 6
  ele.name = '1_'+num; // 6
  contenedor.appendChild(ele); // 7
  
  
  ele = document.createElement('input'); // 5
  ele.type = 'button'; // 6
  ele.value = 'Borrar'; // 8
  ele.name = 'div'+num; // 8
  ele.onclick = function () {borrar(this.name)} // 9
  contenedor.appendChild(ele); // 7
}
function borrar(obj) {
  fi = document.getElementById('fiel'); // 1 
  fi.removeChild(document.getElementById(obj)); // 10
}



//EXPORTAR A EXCEL

function exportar() 
    {
        $("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
        $("#FormularioExportacion").submit();
};


function exportarcsv() 
    {
        $("#query").val();
        $("#FormularioExportacioncsv").submit();
};




function ajax1 ()
{
$.post("php/ajax1.php", $("#formregistro").serialize())
.done(

function(data) {

if (document.getElementById('rfc').value == "") {$('#rfc').val(data['fromtkt'].rfc);}  
if (document.getElementById('razon_social').value == "") {$('#razon_social').val(data['fromtkt'].razon_social);}  
if (document.getElementById('usuario').value == "") {$('#usuario').val(data['fromtkt'].usuario);}
if (document.getElementById('telefono').value == "") {$('#telefono').val(data['fromtkt'].telefono);}
if (document.getElementById('correo').value == "") {$('#correo').val(data['fromtkt'].correo);}
if (document.getElementById('software').value == "") {$('#software').val(data['fromtkt'].software);}
if (document.getElementById('producto').value == "") {$('#producto').val(data['fromtkt'].producto);}
if (document.getElementById('plan').value == "") {$('#plan').val(data['fromtkt'].plan);}
if (document.getElementById('asunto').value == "") {$('#asunto').val(data['fromtkt'].asunto);}


valor = document.getElementById('producto').value  ;

if (valor == "CF") {$('#rowsoftware').show() ;}
else if (valor == "TF") {$('#rowsoftware').show() ;}
else {$('#rowsoftware').hide() ;}

}

)
//.fail(function() { alert("error"); });
};



function ajax2 ()
{
$.post("php/ajax2.php", $("#formregistro").serialize())
.done(

function(data) {

if (document.getElementById('razon_social').value == "") {$('#razon_social').val(data['fromrfc'].razon_social);}  
if (document.getElementById('usuario').value == "") {$('#usuario').val(data['fromrfc'].usuario);}
if (document.getElementById('telefono').value == "") {$('#telefono').val(data['fromrfc'].telefono);}
if (document.getElementById('correo').value == "") {$('#correo').val(data['fromrfc'].correo);}
if (document.getElementById('software').value == "") {$('#software').val(data['fromrfc'].software);}
if (document.getElementById('producto').value == "") {$('#producto').val(data['fromrfc'].producto);}
if (document.getElementById('plan').value == "") {$('#plan').val(data['fromrfc'].plan);}

valor = document.getElementById('producto').value  ;

if (valor == "CF") {$('#rowsoftware').show() ;}
else if (valor == "TF") {$('#rowsoftware').show() ;}
else {$('#rowsoftware').hide() ;}

}

)
//.fail(function() { alert("error"); });
};

function displaysoftware ()
{
valor = document.getElementById('producto').value  ;
if (valor == "CF") 
  
  {  $('#rowsoftware').show() ;}

else if (valor == "TF") 
  {  $('#rowsoftware').show() ;}

else 
  {  $('#rowsoftware').hide() ;}
}

function displayevento ()
{

evento = document.getElementById('evento').value  ;

switch (evento)
{

case "TICKET":
$('#rowticket').show() ;
$('#row_status_ticket').show() ;
$('#rowtelefono').hide() ;
break;

case "LLAMADA":
$('#rowtelefono').show() ;
$('#rowticket').hide() ;
$('#row_status_ticket').hide() ;

break;

case "CHAT":
$('#rowtelefono').hide() ;
$('#rowticket').hide() ;
$('#row_status_ticket').hide() ;
 
  break;

case "":
$('#rowtelefono').hide() ;
$('#rowticket').hide() ;
$('#row_status_ticket').hide() ;
  break;


}


}

function displaytransferida ()
{

//nivel_atencion = document.getElementById('nivel_atencion').value  ;
nivel_atencion = $('#nivel_atencion').val()  ;

if(nivel_atencion == "SOPORTE PRIMER NIVEL")
{
$('#rowtransferida').hide() ; 
}
else if (nivel_atencion == "") 
{
$('#rowtransferida').hide() ; 
}
else if (nivel_atencion == "VENTAS PRIMER NIVEL") 
{
$('#rowtransferida').hide() ; 
}
else{
$('#rowtransferida').show() ;
}
}


function displaySoftwareVentas ()
{


evento = $('#evento').val()  ;
if (evento == "LLAMADA")
{

valor = document.getElementById('producto').value  ;
if (valor == "CF") 
  {  
    $('#rowsoftware').show() ;
    $('#rowtransferida').show() ;
  }

else if (valor == "TF") 
  {  $('#rowsoftware').show() ;
     $('#rowtransferida').hide() ;
  }

else 
  {  $('#rowsoftware').hide() ;
     $('#rowtransferida').hide() ;
  }
}

}

function displayEventoVentas ()
{

evento = document.getElementById('evento').value  ;

switch (evento)
{

case "TICKET":
$('#rowticket').show() ;
$('#row_status_ticket').show() ;
$('#rowtelefono').hide() ;
$('#row_tipo_compra').hide() ;
$('#row_complemento').hide() ;
$('#row_medio_contacto').hide() ;
$('#row_motivo_compra').hide() ;
$('#row_volumen_transacciones').hide() ;
$('#row_cadena_comercial').hide() ;
$('#rowasunto').show() ;
$('#row_producto').show() ;
$('#row_plan').show() ;
break;

case "LLAMADA":
$('#rowtelefono').show() ;
$('#rowticket').hide() ;
$('#row_status_ticket').hide() ;
$('#row_tipo_compra').show() ;
$('#row_complemento').show() ;
$('#row_medio_contacto').show() ;
$('#row_motivo_compra').show() ;
$('#row_volumen_transacciones').show() ;
$('#row_cadena_comercial').show() ;
$('#row_nivel_atencion').hide() ;
$('#rowasunto').hide() ;
$('#row_producto').hide() ;
$('#row_plan').hide() ;

row_producto
break;

case "CHAT":
$('#rowtelefono').hide() ;
$('#rowticket').hide() ;
$('#row_status_ticket').hide() ;
$('#row_tipo_compra').hide() ;
$('#row_complemento').hide() ;
$('#row_medio_contacto').hide() ;
$('#row_motivo_compra').hide() ;
$('#row_volumen_transacciones').hide() ;
$('#row_cadena_comercial').hide() ;
$('#rowasunto').show() ;
$('#row_producto').show() ;
$('#row_plan').show() ;
 
  break;

case "":
$('#rowtelefono').hide() ;
$('#rowticket').hide() ;
$('#row_status_ticket').hide() ;
$('#row_tipo_compra').hide() ;
$('#row_complemento').hide() ;
$('#row_medio_contacto').hide() ;
$('#row_motivo_compra').hide() ;
$('#row_volumen_transacciones').hide() ;
$('#row_cadena_comercial').hide() ;
$('#rowasunto').show() ;
  break;


}


}

function displayTransferidaVentas ()
{
nivel_atencion = $('#nivel_atencion').val()  ;

if(nivel_atencion == "SOPORTE PRIMER NIVEL")
{
$('#rowtransferida').hide() ; 
}
else if (nivel_atencion == "") 
{
$('#rowtransferida').hide() ; 
}
else if (nivel_atencion == "VENTAS PRIMER NIVEL") 
{
$('#rowtransferida').hide() ; 
}
else{
$('#rowtransferida').show() ;
}
}

function displayProductoVentas ()
{
tipo_compra = $('#tipo_compra').val()  ;

switch (tipo_compra)
{

case "1ª Compra":
$('#row_producto').show() ;
$('#row_plan').show() ;
break;

case "Renovación":
$('#row_producto').show() ;
$('#row_plan').show() ;
break;

case "Recurrente":
$('#row_producto').hide() ;
$('#row_plan').hide() ;
break;

case "":
$('#row_producto').hide() ;
$('#row_plan').hide() ;
break;

}

}










