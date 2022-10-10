    function editar(tarefa,idtarefa) {
            console.log(tarefa,idtarefa)
            
            //criar um form de edição
            let form = document.createElement('form')
            form.action = '/editarform'
            form.method = 'post'
            form.className = 'row'

            //criar um input para entrada do texto
            let inputTarefa = document.createElement('input')
            inputTarefa.type = 'text'
            inputTarefa.name = 'tarefa'
            inputTarefa.className = 'col-9 form-control'
            inputTarefa.value = tarefa

            //criar um input hidden para guardar o id da tarefa
            let inputId = document.createElement('input')
            inputId.type = 'hidden'
            inputId.name = 'id'
            inputId.value = idtarefa

            //criar um button para envio do form
            let button = document.createElement('button')
            button.type = 'submit'
            button.className = 'col-3 btn btn-info'
            button.innerHTML = 'Atualizar'

            //incluir inputTarefa no form
            form.appendChild(inputTarefa)

            //incluir inputId no form
            form.appendChild(inputId)

            //incluir button no form
            form.appendChild(button)
            
            //selecionar a div tarefa
            let tarefaform = document.getElementById('tarefa_'+idtarefa)
           
            //limpar o texto da tarefa para inclusão do form
            tarefaform.innerHTML = ''

            //incluir form na página
            tarefaform.insertBefore(form, tarefaform[0])
            
        }
