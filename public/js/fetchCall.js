// RECEBE JSON NO FORMATO {'status': 'valor', 'msg': arrays de mensagens}
function verifyError(json){

    if(json.status == 'error'){
        let ul = document.createElement('ul')
        ul.classList.add('list-group');
        for (i in json.msg) {
            for (j in json.msg[i]) {
                let li = document.createElement('li')
                li.appendChild(document.createTextNode(json.msg[i][j]))
                li.classList.add("list-group-item");
                li.classList.add("list-group-item-danger");
                ul.appendChild(li)
            }
        }
        display_erro = document.getElementById('resposta_requisicao')
        display_erro.appendChild(ul)
        display_erro.style.display = 'block'
    }
    else{
        document.location.reload(true)
    }
}


function submitPostCall(url, formName){

    document.getElementById('resposta_requisicao').innerHTML = ''
    document.getElementById('resposta_requisicao').style.display = 'none'

    document.getElementById(formName).addEventListener('submit', function(e){
        e.preventDefault()
        const dadosForm = new FormData(this)
        let token = document.querySelector("meta[name='csrf-token']").getAttribute('content')
        fetch(url, {
            headers: { "X-CSRF-TOKEN": token },
            method: 'post',
            body: dadosForm
        })
        .then( resposta => {
            if(resposta.ok){
              console.log("OK !")
              return resposta.json()
            }
            else{

                return Promise.reject("Erro na chamada.")
            }
        })
        .then(retorno => {
            verifyError(retorno)
        })
        .catch(erro => {
            console.log(erro)
            console.log("Deu ruim, fi !")
        })
    })
}
