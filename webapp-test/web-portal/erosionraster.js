var erosionraster = L.tileLayer.wms("http://10.6.1.10:8080/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:deposition_final',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
map.addLayer(erosionraster);

    var overlayMaps = {
      "Erosion Raster": erosionraster
    };

// change between the layers
L.control.layers(baseMaps, overlayMaps).addTo(map);