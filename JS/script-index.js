document.querySelector('#menu-btn ').addEventListener('click', function(){

    document.querySelector('#menu-site').classList.toggle("active")

    document.querySelector('#menu-icon').classList.toggle("active")
})

const modal = document.querySelector("dialog")

function abrirModal(){
    modal.showModal()
}

function adicionar(){
    let text = document.getElementById("lembrete").value
    let lista = document.getElementById("lista-lembrete").innerHTML

    lista += "<li>" +text+ "</li>"

    document.getElementById("lista-lembrete").innerHTML = lista
}