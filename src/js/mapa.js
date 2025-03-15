if(document.querySelector('#mapa')){
    const lat = 2.459218;
    const lng = -76.594081
    const zoom = 16
    const map = L.map('mapa').setView([lat, lng], zoom);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([lat, lng]).addTo(map)
    .bindPopup(`
            <h2 class="mapa_heading">DevWebCamp</h2>
            <p class="mapa_texto">Centro Comercial Campanario de Popayan</p>
        `)
    .openPopup();
}