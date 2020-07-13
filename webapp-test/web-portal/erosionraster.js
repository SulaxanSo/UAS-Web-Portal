var erosionraster = L.tileLayer.wms("https://geovm-mundus-web.uni-muenster.de/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:deposit',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
map.addLayer(erosionraster);
layerControl.addOverlay(erosionraster, "Erosion Raster");