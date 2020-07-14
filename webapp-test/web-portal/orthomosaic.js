var orthomosaic_rgb = L.tileLayer.wms("https://geo-arcgis-srv.uni-muenster.de:6443/arcgis/services/ESRI_2020/Orthophoto/MapServer/WMSServer", {
        layers: '0',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
map.addLayer(orthomosaic_rgb);
layerControl.addOverlay(orthomosaic_rgb, "Orthophoto");

var legendOrtho = L.control.htmllegend({
        position: 'bottomright',
        legends: [{
        name: 'Orthomosaic RGB',
        layer: orthomosaic_rgb,
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
    map.addControl(legendOrtho);