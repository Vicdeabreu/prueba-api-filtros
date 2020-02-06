$("#companyZip").focusout(function(){

  $.ajax({
    url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode',
    datatype: 'json',
    success: function(resposta){
      $("#companyAddress").val(resposta.logradouro);
      $("#companyCity").val(resposta.uf);
      $("#companyState").val(resposta.localidade);

      $("#companyAddressNo").focus();
    }
  })
})