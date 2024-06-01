var page;

function execDatatable(text) {

/*=============================================
 Validamos tabla de administradores BASE MODIFICAR PARA QUE MUESTRE DATOS DE USUARIO
=============================================*/ 

if($(".tableAdmins").length > 0){

  var url = "ajax/data-admins.php?text="+text+"&between1="+$("#between1").val()+"&between2="+$("#between2").val()+"&token="+localStorage.getItem("token_user");

  var columns = [
    {"data": "id_user"},
    {"data": "picture_user", "orderable":false, "search":false},
    {"data": "displayname_user"},
    {"data": "username_user"},
    {"data": "email_user"},
    {"data": "country_user"},
    {"data": "city_user"},
    {"data": "date_created_user"},
    {"data": "actions", "orderable":false}
  ];

  page = "admins";

}



/*=============================================
 Validamos tabla de mensajes
=============================================*/ 

if($(".tableMessages").length > 0){

  var url = "ajax/data-messages.php?text="+text+"&between1="+$("#between1").val()+"&between2="+$("#between2").val()+"&idAdmin="+$("#idAdmin").val();

   var columns = [
      { "data": "id_message" },
      { "data": "name_store"},
      { "data": "name_product"},
      { "data": "displayname_user"},
      { "data": "email_user" },
      { "data": "content_message", "orderable": false },
      { "data": "answer_message", "orderable": false },
      { "data": "date_answer_message" },   
      { "data": "date_created_message" }      
  ];

  page = "messages";

}

/*=============================================
Ejecutamos DataTable
=============================================*/ 

  var adminsTable = $("#adminsTable").DataTable({

    "responsive": true, 
    "lengthChange": true, 
    "aLengthMenu":[[10, 50, 100, 500, 1000],[10, 50, 100, 500, 1000]],
    "autoWidth": false,
    "processing":true,
    "serverSide": true,
    "order":[[0,"desc"]],
    "ajax":{
      "url":url,
      "type":"POST"
    },
    "columns":columns,
    // "language": {

    //   "sProcessing":     "Procesando...",
    //   "sLengthMenu":     "Mostrar _MENU_ registros",
    //   "sZeroRecords":    "No se encontraron resultados",
    //   "sEmptyTable":     "Ningún dato disponible en esta tabla",
    //   "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
    //   "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
    //   "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    //   "sInfoPostFix":    "",
    //   "sSearch":         "Buscar:",
    //   "sUrl":            "",
    //   "sInfoThousands":  ",",
    //   "sLoadingRecords": "Cargando...",
    //   "oPaginate": {
    //     "sFirst":    "Primero",
    //     "sLast":     "Último",
    //     "sNext":     "Siguiente",
    //     "sPrevious": "Anterior"
    //   },
    //   "oAria": {
    //     "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
    //     "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    //   }

    // },

    "buttons": [

      { extend:"copy",className:"btn-dark"},
      { extend:"csv",className:"btn-dark"},
      { extend:"excel",className:"btn-dark"},
      { extend:"pdf",className:"btn-dark",orientation:"landscape"},
      { extend:"print",className:"btn-dark"},
      { extend:"colvis",className:"btn-dark"}

    ],
    fnDrawCallback:function(oSettings){
      if(oSettings.aoData.length == 0){
          $('.dataTables_paginate').hide();
          $('.dataTables_info').hide();
      }

    }
  })

  if(text == "flat"){

    $("#adminsTable").on("draw.dt", function(){

      setTimeout(function(){
    
         adminsTable.buttons().container().appendTo('#adminsTable_wrapper .col-md-6:eq(0)');  

      },100)

    })

  }

};

execDatatable("html");

/*=============================================
Ejecutar reporte 
=============================================*/

function reportActive(event){
  
  if(event.target.checked){

    $("#adminsTable").dataTable().fnClearTable();
    $("#adminsTable").dataTable().fnDestroy();

    setTimeout(function(){

      execDatatable("flat");

    },100)

  }else{

    $("#adminsTable").dataTable().fnClearTable();
    $("#adminsTable").dataTable().fnDestroy();

    setTimeout(function(){

      execDatatable("html");

     },100)
  }

}


/*=============================================
Rango de fechas
=============================================*/

$('#daterange-btn').daterangepicker(
  {
    // "locale": {
    //   "format": "YYYY-MM-DD",
    //   "separator": " - ",
    //   "applyLabel": "Aplicar",
    //   "cancelLabel": "Cancelar",
    //   "fromLabel": "Desde",
    //   "toLabel": "Hasta",
    //   "customRangeLabel": "Rango Personalizado",
    //   "daysOfWeek": [
    //       "Do",
    //       "Lu",
    //       "Ma",
    //       "Mi",
    //       "Ju",
    //       "Vi",
    //       "Sa"
    //   ],
    //   "monthNames": [
    //       "Enero",
    //       "Febrero",
    //       "Marzo",
    //       "Abril",
    //       "Mayo",
    //       "Junio",
    //       "Julio",
    //       "Agosto",
    //       "Septiembre",
    //       "Octubre",
    //       "Noviembre",
    //       "Diciembre"
    //   ],
    //   "firstDay": 1
    // },
    // ranges   : {
    //   'Hoy'       : [moment(), moment()],
    //   'Ayer'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    //   'Últimos 7 días' : [moment().subtract(6, 'days'), moment()],
    //   'Últimos 30 días': [moment().subtract(29, 'days'), moment()],
    //   'Este Mes'  : [moment().startOf('month'), moment().endOf('month')],
    //   'Último Mes'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
    //   'Este Año': [moment().startOf('year'), moment().endOf('year')],
    //   'Último Año'  : [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
    // },
    ranges   : {
      'Today'       : [moment(), moment()],
      'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month'  : [moment().startOf('month'), moment().endOf('month')],
      'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
      'This Year': [moment().startOf('year'), moment().endOf('year')],
      'last Year'  : [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
    },

    startDate: moment($("#between1").val()),
    endDate  : moment($("#between2").val())
  },
  function (start, end) {

    window.location = page+"?start="+start.format('YYYY-MM-DD')+"&end="+end.format('YYYY-MM-DD');
  },


)


