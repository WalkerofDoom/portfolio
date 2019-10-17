document.getElementById("botao_modal").addEventListener("click", modal_entrar);

function modal_entrar(variavel){
  if(document.getElementById(variavel).style.display == "none"){
    document.getElementById(variavel).style.display = "block";
  }else{
    document.getElementById(variavel).style.display = "none";
  }
}
