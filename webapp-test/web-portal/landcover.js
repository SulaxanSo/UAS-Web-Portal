var landcovermap = L.tileLayer.wms("https://geo-arcgis-srv.uni-muenster.de:6443/arcgis/services/ESRI_2020/Orthophoto/MapServer/WMSServer", {
        layers: '0',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
map.addLayer(landcovermap);
layerControl.addOverlay(landcovermap, "Land Cover Map");

var overlay = {
    "landcovermap": landcovermap,
    "boundary": boundary,
    "bounds": bounds,
    "riverline": riverline
}

//OpacityControl
L.control.opacity(overlay,
{
   label: "Layers Opacity"
}).addTo(map);