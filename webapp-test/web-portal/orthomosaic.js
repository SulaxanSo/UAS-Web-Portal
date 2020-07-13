var orthomosaic_rgb = L.tileLayer.wms("https://geovm-mundus-web.uni-muenster.de/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:UAS2020_Multispectral_transparent_mosaic_group1',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
map.addLayer(orthomosaic_rgb);
layerControl.addOverlay(orthomosaic_rgb, "RGB Orthomosaic");

var overlay = {
    "RGB Orthomosaic": orthomosaic_rgb,
    "Boundary": boundary,
    "Bounds": bounds,
    "River Line": riverline
}

//OpacityControl
L.control.opacity(overlay,
{
   label: "Layers Opacity"
}).addTo(map);