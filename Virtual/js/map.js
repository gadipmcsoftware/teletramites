     try {
        var  marker;
        var lat=sessionStorage.getItem('Latitud');
        var lon=sessionStorage.getItem('Longitud');
        if(lat==0&&lon==0)
        {
            var map = L.map('map').setView([0.04068, -78.1443], 13);
        }
        else
        {
            var map = L.map('map').setView([lat, lon], 13);
            marker = L.marker([lat,lon]).addTo(map)
            marker.bindPopup("<b>Mi ubicación</b><br><a href='#'>Has hecho click en la coordenada:<br>"+ lat.toString()+"," +lon.toString()+"</a>");
        }
        
        var X;
        var Y;
        // Capas base
        var osmLayer = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 50,
                    attribution: 'Datos del mapa de &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>, ' + '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' + 'Imágenes © <a href="https://www.mapbox.com/">Mapbox</a>', 
                    id: 'mapbox/streets-v11'
        }).addTo(map);

        //argar();
        var popup = L.popup();       

        map.on('click', onMapClick);
    } catch (e) {
        alert("error"+e);
    }        
function onMapClick(e) {
 
  try {
       
            var Latitud=sessionStorage.getItem('Latitud');
            var Longitud=sessionStorage.getItem('Longitud');
        
         if(Latitud!=0)
         {
//             alert("latitudd "+Latitud);
             map.removeControl(marker);
             marker = new L.Marker(e.latlng, { draggable: true });
         }
        
        X=e.latlng.lat.toString();
        Y= e.latlng.lng.toString();
        marker = L.marker([X,Y]).addTo(map);
        marker.bindPopup("<b>Mi ubicación</b><br><a href='#'>Has hecho click en la coordenada:<br>"+ e.latlng.lat.toString()+"," +e.latlng.lng.toString()+"</a>");
        sessionStorage.setItem('Latitud',X);
        sessionStorage.setItem('Longitud',Y);
//         alert("prueba")
//          map.off('click', onMapClick);
        
    } catch (e) {
        alert("error"+e);
    }
//$("#lbl_cordenadaX").val(X);
//$("#lbl_cordenadaY").val(Y);  
}
function cargarMapa(){
    alert("pasooo por el mapa");
}
