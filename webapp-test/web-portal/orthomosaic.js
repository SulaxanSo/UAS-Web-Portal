var orthomosaic_rgb = L.tileLayer.wms("http://10.6.1.10:8080/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:UAS2020_Multispectral_transparent_mosaic_group1',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
map.addLayer(orthomosaic_rgb);

    var overlayMaps = {
      "RGB Orthomosaic": orthomosaic_rgb
    };

// change between the layers
L.control.layers(baseMaps, overlayMaps).addTo(map);

console.log(orthomosaic_rgb.getBounds());