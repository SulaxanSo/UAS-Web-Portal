var orthomosaic_rgb = L.tileLayer.wms("https://geo-arcgis-srv.uni-muenster.de:6443/arcgis/services/ESRI_2020/Orthophoto/MapServer/WMSServer", {
        layers: '0',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
map.addLayer(orthomosaic_rgb);
layerControl.addOverlay(orthomosaic_rgb, "Orthophoto");

var overlay = {
    "Orthophoto": orthomosaic_rgb,
    "Boundary": boundary,
    "Bounds": bounds,
    "River Line": riverline
}

//OpacityControl
L.control.opacity(overlay,
{
   label: "Layers Opacity"
}).addTo(map);
