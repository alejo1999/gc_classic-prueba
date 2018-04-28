$( document ).ready(function(){

	$('.button-collapse').sideNav();
            $('.modal').modal();
            $('select').material_select();
            $(".dropdown-button").dropdown();
            $('.materialboxed').materialbox();
   $(".button-collapse").sideNav();
   $('.slider').slider();
  $('.parallax').parallax();
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
   
    $('ul.tabs').tabs();


$('.datepicker').pickadate({
  monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
  weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mier', 'Jue', 'Vir', 'Sab'],
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 15, // Creates a dropdown of 15 years to control year,
  today: 'Hoy',
  max: 'Today',
  clear: 'Limpiar',
  close: 'Aceptar',
  format: 'yyyy/mm/dd',
  formatSubmit: 'yyyy/mm/dd',
  closeOnSelect: false ,// Close upon selecting a date,
  container: undefined, // ex. 'body' will append picker to body
  
});


})
      



function aumentar_numero(){

  var numero1;
  numero1 = cantidad.value;

  if(document.getElementById('cantidad').value == "")
  {
  numero1 = 0;
  }

  numero1 = parseInt(numero1) + parseInt( 1);
  numero1.toString();

  if(numero1 > 5 )
  {
    numero1 = 5;
  }

  document.f1.cantidad.value = numero1;
};

function restar_numero(){

  var numero1;
  numero1 = cantidad.value;

  if(document.getElementById('cantidad').value == "")
  {
  numero1 = 0;
  }

  numero1 = parseInt(numero1) + parseInt( -1);
  numero1.toString();


  if(numero1 < 0)
  {
    numero1=0;
  }

  document.f1.cantidad.value = numero1;
};

//BLOQUE DE CODIGO DE PRECIO

function aumentar_precio(){

  var numero1;
  numero1 = precio.value;

  if(document.getElementById('precio').value == "")
  {
  numero1 = 0;
  }

  numero1 = parseInt(numero1) + parseInt( 25);
  numero1.toString();


  document.f2.precio.value = numero1;
};

function restar_precio(){

  var numero1;
  numero1 = precio.value;

  if(document.getElementById('precio').value == "")
  {
  numero1 = 0;
  }

  numero1 = parseInt(numero1) + parseInt( -25);
  numero1.toString();

if(numero1 < 0)
{
  numero1 = 0;
}

  document.f2.precio.value = numero1;
};

