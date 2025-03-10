(function(){
    const tagsInput = document.querySelector('#tags_input');

    if(tagsInput){
        const tagsDiv = document.querySelector('#tags');
        const tagsinputHidden = document.querySelector('[name="tags"]');
        let tags = [];

        //Recuperar del input oculto
        if(tagsinputHidden.value !== ''){
            tags = tagsinputHidden.value.split(',');
            mostrarTags();
        }

        //Escuchar los cambios en el input
        tagsInput.addEventListener('keypress', guardarTag);

        function guardarTag(e){
            if(e.keyCode === 44){
                if(e.target.value.trim() === '' || e.target.value < 1){
                    return;
                }
                e.preventDefault();
                tags = [...tags, e.target.value.trim()];
                tagsInput.value = '';

                mostrarTags();
            }
        }

        function mostrarTags(){
            tagsDiv.textContent = '';

            tags.forEach(tag => {
                const etiqueta = document.createElement('LI');
                etiqueta.classList.add('formulario_tag');
                etiqueta.textContent = tag;
                etiqueta.ondblclick = eliminarTag;
                tagsDiv.appendChild(etiqueta);
            });
            actualizarInputHidden();
        }

        function eliminarTag(e){
            e.target.remove();
            tags = tags.filter(tag => tag !== e.target.textContent);
            actualizarInputHidden();
        }

        function actualizarInputHidden(){
            tagsinputHidden.value = tags.toString();
        }
    }
})() //IIFE