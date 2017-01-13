function sendemail(){
  var nome      = $("#nome").val();
  var email     = $("#email").val();
  var assunto   = $("#assunto").val();
  var mensagem  = $("#mensagem").val();

  $.ajax({
    url:  "sendemail.php",
    type: "POST",
    data: "nome="+nome+"&email="+email+"&assunto="+assunto+"&mensagem="+mensagem,
    success: function(dados){
      console.log(dados);
      if (dados == 1){
        $("#form1")[0].reset();
        $("#myModal").modal('hide');
      } else {
        console.log(dados);
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      alert("Status: " + textStatus); alert("Error: " + errorThrown);
      console.log(arguments);
    }
  })
}
