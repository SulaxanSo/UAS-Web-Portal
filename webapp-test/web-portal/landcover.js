var landcovermap = L.tileLayer.wms("https://geovm-mundus-web.uni-muenster.de/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:LandCoverMap',
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