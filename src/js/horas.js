(function(){
    let horas = document.querySelector('#horas');
    if(horas){
        
        let categoria = document.querySelector('[name="categoria_id"]');
        let dias = document.querySelectorAll('[name="dia"]');
        let inputHiddenDia = document.querySelector('[name="dia_id"]');
        let inputHiddenHora = document.querySelector('[name="hora_id"]');
        categoria.addEventListener('change', terminoBusqueda);
        dias.forEach(dia => dia.addEventListener('change', terminoBusqueda));

        //Se coloca aca para que al entrar al view de editar se muestre el valor actual
        let busqueda ={
            categoria_id: +categoria.value || '',
            dia: +inputHiddenDia.value || ''
        }

        if(!Object.values(busqueda).includes('')){
            (async() => {
                await buscarEventos();

                //Resaltar la hora actual
                const id = inputHiddenHora.value;
                const horaSeleccionada = document.querySelector(`[data-hora-id="${id}"]`);

                horaSeleccionada.classList.remove('horas_hora-deshabilitada');
                horaSeleccionada.classList.add('horas_hora-seleccionada');
                horaSeleccionada.onclick = seleccionarHora;
            })();
        }

        function terminoBusqueda(e){
            busqueda[e.target.name] = e.target.value;
            
            //Reiniciar los campos ocultos y el selector de horas
            inputHiddenHora.value = '';
            inputHiddenDia.value = '';
            const hora_previa = document.querySelector('.horas_hora-seleccionada')
            if(hora_previa){
                hora_previa.classList.remove('horas_hora-seleccionada');
            }

            if(Object.values(busqueda).includes('')){
                return;
            }
            buscarEventos();
        }

        async function buscarEventos(){
            const {dia, categoria_id } = busqueda
            const url = `http://localhost:3000/api/eventos-horario?dia_id=${dia}&categoria_id=${categoria_id}`;      
            const resultado = await fetch(url);        
            const eventos = await resultado.json();
            obtenerHorasDisponibles(eventos);
        }

        function obtenerHorasDisponibles(eventos){

            //Reiniciar las horas
            const listadoHoras = document.querySelectorAll('#horas li');
            listadoHoras.forEach(li => li.classList.add('horas_hora-deshabilitada'))

            //Comprobar Eventos ya tomados y quitar la variable de desabilitado
            const horasTomadas = eventos.map(evento => evento.hora_id);
            const listadoHorasArray = Array.from(listadoHoras);
            const resultado = listadoHorasArray.filter(li => !horasTomadas.includes(li.dataset.horaId));

            resultado.forEach(li => li.classList.remove('horas_hora-deshabilitada'));

            
            const horasDisponible = document.querySelectorAll('#horas li:not(.horas_hora-deshabilitada');
            horasDisponible.forEach( hora => hora.addEventListener('click', seleccionarHora))
        }

        function seleccionarHora(e){
            //Desabilitar la hora previa si hay un nuevo click
            const hora_previa = document.querySelector('.horas_hora-seleccionada')
            if(hora_previa){
                hora_previa.classList.remove('horas_hora-seleccionada');
            }
            //Agregar clase para visualizacion
            e.target.classList.add('horas_hora-seleccionada');
            inputHiddenHora.value = e.target.dataset.horaId;

            //Llenar el campo oculto de dia
            inputHiddenDia.value = document.querySelector('[name = "dia"]:checked').value;
        }

    }
})();