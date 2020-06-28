var map = L.map('map').setView([51.975, 7.61], 13);

// add a OpenStreetMap layer
var osm = new L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'});
        
        osm.addTo(map);
        
// add a humanitarian OpenStreetMap layer
var hotOSM = new L.tileLayer('http://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors. Tiles courtesy of <a href="http://hot.openstreetmap.org/" target ="_blank">Humanitarian OpenStreetMap Team'
        })

var OpenStreetMap_DE = new L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});

var OpenTopoMap = new L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
	attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
});

var Esri_WorldImagery = new L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
	attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
});

var CartoDB_DarkMatter = new L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>'
});

var baseMaps = {
        "OSM" : osm,
        "humanitarian OSM": hotOSM,
        "OpenStreetMap_DE": OpenStreetMap_DE,
        "OpenTopoMap" : OpenTopoMap,
        "Esri_WorldImagery" : Esri_WorldImagery,
        "CartoDB_DarkMatter" : CartoDB_DarkMatter
};

var blueLayer = L.tileLayer.wms("http://10.6.1.10:8080/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:Multispectral_2_transparent_mosaic_blue',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
    map.addLayer(blueLayer);

    var greenLayer = L.tileLayer.wms("http://10.6.1.10:8080/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:Multispectral_2_transparent_mosaic_green',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
    map.addLayer(greenLayer);

    var redLayer = L.tileLayer.wms("http://10.6.1.10:8080/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:Multispectral_2_transparent_mosaic_red',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
    map.addLayer(redLayer);

    var orthomosaic = L.layerGroup([greenLayer, blueLayer, redLayer]);

    var overlayMaps = {
      "blue": blueLayer,
      "green": greenLayer,
      "red": redLayer
    };

// change between the layers
L.control.layers(baseMaps, overlayMaps).addTo(map);