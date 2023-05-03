function adicionar(){
    let text = document.getElementById("lembrete").value
    let lista = document.getElementById("lista-lembrete").innerHTML

    lista += "<li>" +text+ "</li>"

    document.getElementById("lista-lembrete").innerHTML = lista
}