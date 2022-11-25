const form = document.querySelector('form').addEventListener('submit', e => {
    
    const nome = document.getElementById('name')
    const senha = document.getElementById('pass')

    if(nome.value == '' && senha.value == ''){
        e.preventDefault()
        alert('Senha e Nome vazios')

        return 0
    }
    
    if(nome.value == ''){
        e.preventDefault()
        alert('Nome vazio')

        return 0

    }
    

    if(senha.value == ''){
        e.preventDefault()
        alert('Senha vazia')

        return 0
    }

    alert('Enviado com sucesso')
})