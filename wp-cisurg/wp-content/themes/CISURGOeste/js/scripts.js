jQuery(document).ready(function($){
  $('form#form-ajax').submit(function(){
    var dados = {
      'action': 'altera_status_justificativas',
      'dados' : $(this).serialize()
    };
    $.post(ajax_object.ajax_url, dados, function(resposta){
      var $div_resposta = $(resposta);//$('#form-ajax-resposta');

      $div_resposta.html('');

      //var valor = String(resposta);
      //console.log(valor);



      //$div_resposta.empty();

      /*if (valor == '"justificativas-outros"'){
        $('#form-ajax-resposta').load('./justificativas-outros table');
      }else if (valor == '"justificativas-medicos"'){
        $div_resposta.load('http://localhost/wp-cisurg/index.php/justificativas-medicos #form-ajax-resposta');
      }else if (valor == '"trocas-outros"'){
        $div_resposta.load('http://localhost/wp-cisurg/index.php/trocas-outros #form-ajax-resposta');
      }else if(valor == '"trocas-medicos"'){
        $div_resposta.load('http://localhost/wp-cisurg/index.php/trocas-medicos #form-ajax-resposta');
      }else if(valor == '"justificativas-apontador"'){
        $div_resposta.load('http://localhost/wp-cisurg/index.php/justificativas-apontador #form-ajax-resposta');
      }else if(valor == '"trocas-apontador"'){
        $div_resposta.load('http://localhost/wp-cisurg/index.php/trocas-apontador #form-ajax-resposta');
      }else{
        $div_resposta.load('http://localhost/wp-cisurg/index.php/justificativas-administrativo #form-ajax-resposta');
      }*/

    }, 'json');
    return false;
  });
});
