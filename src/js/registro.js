import Swal from 'sweetalert2'

(function(){
    
    const resumen = document.querySelector('#registro-resumen');
    if(resumen){
        let eventos = [];
    
        const eventosBoton = document.querySelectorAll('.evento_agregar');
        eventosBoton.forEach(boton => boton.addEventListener('click', seleccionarEvento));
        const formularioRegistro = document.querySelector('#registro');
        formularioRegistro.addEventListener('submit', submitFormulario);


        function seleccionarEvento(e){
            if(eventos.length < 5){
                //Deshabilitar el evento seleccionado
                e.target.disabled = true;

                eventos = [...eventos, {
                    id:e.target.dataset.id,
                    titulo: e.target.parentElement.querySelector('.evento_nombre').textContent.trim()
                }];
                mostrarEventos();
            }else{
                Swal.fire({
                    title: 'Error',
                    text: 'Máximo 5 eventos por registro',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    timer: 5000
                })
            }
        
        }

        function mostrarEventos(){

            //Limpiar el HTML
            limpiarEventos();

            if(eventos.length > 0){
                eventos.forEach( evento => {
                    const eventoDOM = document.createElement('DIV');
                    eventoDOM.classList.add('registro_evento')

                    const titulo = document.createElement('H3');
                    titulo.classList.add('registro_nombre');
                    titulo.textContent = evento.titulo;

                    const botonEliminar = document.createElement('BUTTON');
                    botonEliminar.classList.add('registro_eliminar');
                    botonEliminar.innerHTML = `<i class="fa-solid fa-trash"><i>`;
                    botonEliminar.onclick = function(){
                        eliminarEvento(evento.id);
                    };

                    //Renderizar en el HTML
                    eventoDOM.appendChild(titulo);
                    eventoDOM.appendChild(botonEliminar);
                    resumen.appendChild(eventoDOM);
                });
            }
        }

        function limpiarEventos(){
            while(resumen.firstChild){
                resumen.removeChild(resumen.firstChild);
            }
        }

        function eliminarEvento(id){
            eventos = eventos.filter(evento => evento.id !== id);
            const botonAgregar = document.querySelector(`[data-id="${id}"]`);
            botonAgregar.disabled = false;
            mostrarEventos();
        }

        function submitFormulario(e){
            e.preventDefault();
            //Obtener el regalo
            const regaloId = document.querySelector('#regalo').value;
            const eventosId = eventos.map(evento => evento.id);
            
            if(eventosId.length === 0 || regaloId === ''){
                Swal.fire({
                    title: 'Error',
                    text: 'Debes agregar al menos un evento y un regalo',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    timer: 5000
                })
                return;
            }

            console.log('Registrando');
        }
    }
})();