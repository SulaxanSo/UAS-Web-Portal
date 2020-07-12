var landcovermap = L.tileLayer.wms("http://10.6.1.10:8080/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:LandCoverMap',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
map.addLayer(landcovermap);
layerControl.addOverlay(landcovermap, "Land Cover Map");