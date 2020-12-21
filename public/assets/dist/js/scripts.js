$('#testeBotao').click(async function(){
               
    
    //$('#teste').trigger(new Event('input'));
    const retorno = await $.ajax({url: 'https://viacep.com.br/ws/13808103/json/', dataType: 'json'});
    console.log(retorno)
    $('#teste-input').val(retorno.logradouro);
    document.getElementById('teste-input').dispatchEvent(new Event('input'));
 })


