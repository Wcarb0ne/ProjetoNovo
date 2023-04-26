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
L.marker([-23.4382522,-46.3812856], { icon: greenIcon }).addTo(map);




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
