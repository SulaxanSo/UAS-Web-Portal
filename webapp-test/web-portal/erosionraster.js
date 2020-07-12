var erosionraster = L.tileLayer.wms("http://10.6.1.10:8080/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:deposit',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
map.addLayer(erosionraster);
layerControl.addOverlay(erosionraster, "Erosion Raster");