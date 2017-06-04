  $(document).ready(function(){
  	$(".button-collapse").sideNav();
    $('.collapsible').collapsible();
    $('select').material_select();  
  });



 function CargarPanelPrecios(){ 	
    $('#spinner').removeClass('hide');
    $('#content').hide();
    $('#content').load('/showcategorias',function(){
          $('#spinner').addClass('hide');
          $('#content').show();     	
    });
  	$('.button-collapse').sideNav('hide');// Hide sideNav
    //Materialize.toast('I am a toast!', 4000)
  }

function ResultPrecios(){
    /*$('#result').load('/categorias',function(){
          $('#spinner').addClass('hide');
          $('#content').show();       
    });  */
}

  function CargarDepartamentos(){  
    $('#spinner').removeClass('hide');
    $('#content').hide();
    $('#content').load('/departamentos',function(){
          $('#spinner').addClass('hide');
          $('#content').show();       
    });
    $('.button-collapse').sideNav('hide');// Hide sideNav

  } 

function ActualizarDepto($id){
  $('#spinner').removeClass('hide');
    $('#content').hide();
    $('#content').load('/departamento/'+$id+'/edit',function(){
          $('#spinner').addClass('hide');
          $('#content').show();       
    });
    $('.button-collapse').sideNav('hide');// Hide sideNav
}


function FormNewDepto(){
  $('#spinner').removeClass('hide');
    $('#content').hide();
    $('#content').load('/departamento',function(){
          $('#spinner').addClass('hide');
          $('#content').show();       
    });  
  }
//************************************************************
  function CargarCategorias(){  
    $('#spinner').removeClass('hide');
    $('#content').hide();
    $('#content').load('/categorias',function(){
          $('#spinner').addClass('hide');
          $('#content').show();       
    });
    $('.button-collapse').sideNav('hide');// Hide sideNav

  } 

function ActualizarCategoria($id){
  $('#spinner').removeClass('hide');
    $('#content').hide();
    $('#content').load('/categoria/'+$id+'/edit',function(){
          $('#spinner').addClass('hide');
          $('#content').show();       
    });
    $('.button-collapse').sideNav('hide');// Hide sideNav
  }  

function FormNewCategoria(){
  $('#spinner').removeClass('hide');
    $('#content').hide();
    $('#content').load('/categoria',function(){
          $('#spinner').addClass('hide');
          $('#content').show();       
    });  
}  
//************************************************************
function CargarPresentaciones(){  
  $('#spinner').removeClass('hide');
  $('#content').hide();
  $('#content').load('/medidas',function(){
        $('#spinner').addClass('hide');
        $('#content').show();       
  });
  $('.button-collapse').sideNav('hide');// Hide sideNav

  } 

function ActualizarUnidad($id){
  $('#spinner').removeClass('hide');
    $('#content').hide();
    $('#content').load('/medida/'+$id+'/edit',function(){
          $('#spinner').addClass('hide');
          $('#content').show();       
    });
    $('.button-collapse').sideNav('hide');// Hide sideNav
  } 

function FormNewUnidad(){
  $('#spinner').removeClass('hide');
    $('#content').hide();
    $('#content').load('/medida',function(){
          $('#spinner').addClass('hide');
          $('#content').show();       
    });  
}  
//************************************************************
function ActualizarProducto($id){
  $('#spinner').removeClass('hide');
    $('#content').hide();
    $('#content').load('/producto/'+$id+'/edit',function(){
          $('#spinner').addClass('hide');
          $('#content').show();       
    });
    $('.button-collapse').sideNav('hide');// Hide sideNav
  } 