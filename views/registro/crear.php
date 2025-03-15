<main class="registros">
    <h2 class="registros_heading">
        <?php echo $titulo; ?>
    </h2>
    <p class="registros_descripcion">Elije tu plan</p>

    <div class="paquetes_grid">
        <div class="paquete">
            <h3 class="paquete_nombre"> Pase gratis </h3>
            <ul class="paquete_lista">
                <li class="paquete_elemento">Acceso virtual a DevWebCamp</li>
            </ul>
            <p class="paquete_precio">$ 0</p>

            <form method="POST" action="/finalizar_registro/gratis">
                <input class="paquetes_submit" type="submit" value="Inscripción gratis">
            </form>
        </div>

        <div class="paquete">
            <h3 class="paquete_nombre"> Pase Presencial </h3>
            <ul class="paquete_lista">
                <li class="paquete_elemento">Acceso presencial a DevWebCamp</li>
                <li class="paquete_elemento">Pase por dos días</li>
                <li class="paquete_elemento">Acceso a talleres y conferencias</li>
                <li class="paquete_elemento">Acceso a las Grabaciones</li>
                <li class="paquete_elemento">Camisa del Evento</li>
                <li class="paquete_elemento">Comida y Bebida</li>
            </ul>
            <p class="paquete_precio">$199</p>
            <div id="smart-button-container">
                <div style="text-align: center;">
                    <div id="paypal-button-container"></div>
                </div>
            </div>

        </div>

        <div class="paquete">
            <h3 class="paquete_nombre"> Pase Virtual </h3>
            <ul class="paquete_lista">
                <li class="paquete_elemento">Acceso virtual a DevWebCamp</li>
                <li class="paquete_elemento">Pase por 2 días</li>
                <li class="paquete_elemento">Enlace a Talleres y conferencias</li>
                <li class="paquete_elemento">Acceso a las Grabaciones</li>
            </ul>
            <p class="paquete_precio">$49</p>
        </div>
    </div>
</main>


<script src="https://www.paypal.com/sdk/js?client-id=AUkXyvPfdc88lFvYnDURtwHrS6omK85SRXqMoFyhifYDfl1JtyGJtRHrv4T_AZ_rp_c-fYZXPw7cC4zl&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>

<script>
    function initPayPalButton() {
        paypal.Buttons({
        style: {
            shape: 'rect',
            color: 'blue',
            layout: 'vertical',
            label: 'pay',
        },

        createOrder: function(data, actions) {
            return actions.order.create({
            purchase_units: [{"description":"1","amount":{"currency_code":"USD","value":199}}]
            });
        },

        onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
                
                const datos = new FormData;
                datos.append('paquete_id', orderData.purchase_units[0].description);
                datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

                fetch('/finalizar_registro/pagar', {
                    method: 'POST',
                    body: datos
                }).then(respuesta => respuesta.json())
                .then(resultado => {
                    if(resultado.resultado){
                        actions.redirect('http://localhost:3000/finalizar_registro/conferencias')
                    }
                })
            
            });
        },

        onError: function(err) {
            console.log(err);
        }
        }).render('#paypal-button-container');
    }

    initPayPalButton();
</script>