console.log('aaaaaaaaa')


var map = L.map('map').setView([-23.46878, -46.52632], 60);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);





var greenIcon = L.icon({
  iconUrl: 'icone.png',
  shadowUrl: 'icone2.png',

  iconSize: [0, 0],
  shadowSize: [25, 30],
  iconAnchor: [22, 94],
  shadowAnchor: [4, 62],
  popupAnchor: [-3, -76]

});



L.marker([-23.46864, -46.52250], { icon: greenIcon }).addTo(map);
L.marker([-23.46760, -46.52951], { icon: greenIcon }).addTo(map);
L.marker([-23.46740, -46.52933], { icon: greenIcon }).addTo(map);
L.marker([-23.46735, -46.52555], { icon: greenIcon }).addTo(map);

///////////////////////////////////////////////////////////////////////////
// mais perto \/
L.marker([-23.46932,-46.52581], { icon: greenIcon }).addTo(map);

///////////////////////////////////////////////////////////////////////////
L.marker([-23.47031,-46.52476], { icon: greenIcon }).addTo(map);
L.marker([-23.46899,-46.52993], { icon: greenIcon }).addTo(map);
L.marker([-23.46035,-46.52431], { icon: greenIcon }).addTo(map);

L.marker([-23.46364,-46.51419], { icon: greenIcon }).addTo(map);




var Icon4 = L.icon({

  iconUrl: 'icone3.png',
  shadowUrl: 'icone3.png',

  iconSize: [0, 0],
  shadowSize: [25, 30],
  iconAnchor: [22, 94],
  shadowAnchor: [4, 62],
  popupAnchor: [-3, -76]
});

L.marker([-23.46870, -46.52632], { icon: Icon4 }).addTo(map);




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function calcularDistancia(lat1, lon1, lat2, lon2) {
  // Converte graus em radianos
  const radianosLat1 = lat1 * (Math.PI / 180);
  const radianosLon1 = lon1 * (Math.PI / 180);
  const radianosLat2 = lat2 * (Math.PI / 180);
  const radianosLon2 = lon2 * (Math.PI / 180);

  // Calcula diferença de latitudes e longitudes
  const difLat = radianosLat2 - radianosLat1;
  const difLon = radianosLon2 - radianosLon1;

  // Aplica a fórmula de Haversine
  const a = Math.sin(difLat / 2) * Math.sin(difLat / 2) +
    Math.cos(radianosLat1) * Math.cos(radianosLat2) *
    Math.sin(difLon / 2) * Math.sin(difLon / 2);
  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  const distancia = 6371 * c; // Raio da Terra em quilômetros

  return distancia;
}




// Exemplo de uso
const lat1 = -23.46870; // Latitude do ponto 1
const lon1 = -46.52632; // Longitude do ponto 1
const lat2 = -23.46932; // Latitude do ponto 2
const lon2 = -46.52581 ; // Longitude do ponto 2

const distancia = calcularDistancia(lat1, lon1, lat2, lon2);
console.log(`A distância da assistencia tecnica mais proxima e de : ${distancia} km.`);

function calcularperto() {

}
