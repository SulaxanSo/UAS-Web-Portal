var erosionraster = L.tileLayer.wms("https://geovm-mundus-web.uni-muenster.de/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:deposit',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
map.addLayer(erosionraster);
layerControl.addOverlay(erosionraster, "Erosion Raster");

var legendErosion = L.control.htmllegend({
        position: 'bottomright',
        legends: [{
        name: 'Erosion Raster',
        layer: erosionraster,
        opacity: 0.5,
        elements: [{
            html: '',
        }]
    }],
        collapseSimple: true,
        detectStretched: true,
        visibleIcon: 'icon icon-eye',
        hiddenIcon: 'icon icon-eye-slash'
    })
    map.addControl(legendErosion);