(function(){
    const ponentesInput = document.querySelector('#ponentes');

    if(ponentesInput){
        let ponentes = [];
        let ponentesFiltrados = [];
        const listadoPonentes = document.querySelector('#listado-ponentes');
        const ponenteHidden = document.querySelector('[name="ponente_id"]');
        
        obtenerPonentes();
        ponentesInput.addEventListener('input' , buscarPonentes);

        if(ponenteHidden.value){
            (async() => {
                const ponente = await obtenerPonente(ponenteHidden.value);
                
                //insertar en el HTML
                const ponenteDom = document.createElement('LI');
                ponenteDom.classList.add('listado-ponentes_ponente', 'listado-ponentes_ponente-seleccionado');
                ponenteDom.textContent = `${ponente.nombre} ${ponente.apellido}`;
                listadoPonentes.appendChild(ponenteDom);
            })();
        }

        async function obtenerPonentes(){
            const url = `/api/ponentes`;      
            const respuesta = await fetch(url);        
            const resultado = await respuesta.json();
            
            formatearPonentes(resultado);
        }

        async function obtenerPonente(id){
            const url = `/api/ponente?id=${id}`;
            const respuesta = await fetch(url);
            const resultado = await respuesta.json();
            return resultado;
        }

        function formatearPonentes(arrayPonentes = []){
            ponentes = arrayPonentes.map(ponente => {
                return {
                    nombre: `${ponente.nombre.trim()} ${ponente.apellido.trim()}`,
                    id: ponente.id
                }
            })
            
        }

        function buscarPonentes(e){
            const busqueda = e.target.value;
            if(busqueda.length >= 3){
                const expresion = new RegExp(busqueda, "i"); //Para buscar en mayuscula o miniscula
                ponentesFiltrados = ponentes.filter(ponente => {
                    if(ponente.nombre.toLowerCase().search(expresion) != -1){
                        return ponente
                    }
                })
            }else{
                ponentesFiltrados = [];
            }
            
            mostrarPonentes();
        }
        
        function mostrarPonentes(){
            while(listadoPonentes.firstChild){
                listadoPonentes.removeChild(listadoPonentes.firstChild);
            }

            if(ponentesFiltrados.length > 0){
                ponentesFiltrados.forEach(ponente => {
                    const ponenteHTML = document.createElement('LI');
                    ponenteHTML.classList.add('listado-ponentes_ponente');
                    ponenteHTML.textContent = ponente.nombre;
                    ponenteHTML.dataset.ponenteId = ponente.id;
                    ponenteHTML.onclick = seleccionarPonente;
    
                    //Agregar al DOM
                    listadoPonentes.appendChild(ponenteHTML)
                })
            }else{
                const noResultado = document.createElement('P');
                noResultado.classList.add('listado-ponentes_no-resultado');
                noResultado.textContent = 'No hay resultados para tu busqueda';
                listadoPonentes.appendChild(noResultado);
            }
            
        }

        function seleccionarPonente(e){
            const ponente = e.target;
            //remover la clase previa
            const ponentePrevio = document.querySelector('.listado-ponentes_ponente-seleccionado');

            if(ponentePrevio){
                ponentePrevio.classList.remove('listado-ponentes_ponente-seleccionado')
            }
            ponente.classList.add('listado-ponentes_ponente-seleccionado');
            ponenteHidden.value = ponente.dataset.ponenteId;
            
        }
    }
})();