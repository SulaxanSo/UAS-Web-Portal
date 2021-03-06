var map = L.map('map', {zoomControl: false}).setView([51.9449, 7.5724], 16);

// add a OpenStreetMap layer
var osm = new L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'});
        
        
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
Esri_WorldImagery.addTo(map);

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

map.addControl(new L.Control.Fullscreen());

var zoomHome = L.Control.zoomHome();
zoomHome.addTo(map);

var layerControl = new L.control.layers(baseMaps).addTo(map);

var loadFile = function(event) {
    // Init
    var input = event.target;
    var reader = new FileReader();

    // Invoked when file is loading. 
    reader.onload = function(){
        // parse content to JSON object
        var filecontent = reader.result;
        var geojson = JSON.parse(filecontent);
        
        // define the gjson object as leaflet layer
        var parsedLayer = new L.geoJson(geojson);

        // add layer to map & layerControl
        parsedLayer.addTo(map);
        //layerControl.addOverlay(parsedLayer, name);
        layerControl.addOverlay(parsedLayer, "geojson");
        //zoom to added layer
        map.fitBounds(parsedLayer.getBounds());
    };
    
    //Read the text
    reader.readAsText(input.files[0]);
   
};

var boundary = L.tileLayer.wms("https://geovm-mundus-web.uni-muenster.de/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:boundary',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });

layerControl.addOverlay(boundary, "Boundary");

var bounds = L.tileLayer.wms("https://geovm-mundus-web.uni-muenster.de/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:bounds',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });

layerControl.addOverlay(bounds, "Bounds");

var riverline = L.tileLayer.wms("https://geovm-mundus-web.uni-muenster.de/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:river_centerline',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });

layerControl.addOverlay(riverline, "River Line");

 var htmlLegendBoundary = L.control.htmllegend({
        position: 'bottomright',
        legends: [{
        name: 'Boundary',
        layer: boundary,
        opacity: 0.5,
        elements: [{
            html: ''
        }]
    }],
        collapseSimple: true,
        detectStretched: true,
        visibleIcon: 'icon icon-eye',
        hiddenIcon: 'icon icon-eye-slash'
    })

    map.addControl(htmlLegendBoundary);

 var htmlLegendBounds = L.control.htmllegend({
        position: 'bottomright',
        legends: [{
        name: 'Bounds',
        layer: bounds,
        opacity: 0.5,
        elements: [{
            html: ''
        }]
    }],
        collapseSimple: true,
        detectStretched: true,
        visibleIcon: 'icon icon-eye',
        hiddenIcon: 'icon icon-eye-slash'
    })

    map.addControl(htmlLegendBounds);

 var htmlLegendRiverline = L.control.htmllegend({
        position: 'bottomright',
        legends: [{
        name: 'River Line',
        layer: riverline,
        opacity: 0.5,
        elements: [{
            html: ''
        }]
    }],
        collapseSimple: true,
        detectStretched: true,
        visibleIcon: 'icon icon-eye',
        hiddenIcon: 'icon icon-eye-slash'
    })

    map.addControl(htmlLegendRiverline);
