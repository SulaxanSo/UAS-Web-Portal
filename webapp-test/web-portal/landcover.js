var landcovermap = L.tileLayer.wms("https://geovm-mundus-web.uni-muenster.de/geoserver/uas2020_workspace/wms", {
        layers: 'uas2020_workspace:LandCoverMap',
        format: 'image/png',
        transparent: true,
        opacity: 0.7
    });
map.addLayer(landcovermap);
layerControl.addOverlay(landcovermap, "Land Cover Map");

var legendLand = L.control.htmllegend({
        position: 'bottomright',
        legends: [{
            name: 'Land Cover Map',
            layer: landcovermap,
            elements: [{
                label: 'water',
                html: '',
                style: {
                    'background-color': 'rgba(0, 195, 255, 1)',
                    'width': '10px',
                    'height': '10px'
                }
            }, {
                label: 'agriculture',
                html: '',
                style: {
                    'background-color': 'rgba(194, 127, 54, 1)',
                    'width': '10px',
                    'height': '10px'
                }
            }, {
                label: 'trees',
                html: '',
                style: {
                    'background-color': 'green',
                    'width': '10px',
                    'height': '10px'
                }
            }, {
                label: 'grass',
                html: '',
                style: {
                    'background-color': 'rgba(132, 208, 100, 1)',
                    'width': '10px',
                    'height': '10px'
                }
            }, {
                label: 'roads',
                html: '',
                style: {
                    'background-color': 'grey',
                    'width': '10px',
                    'height': '10px'
                }
            }]
        }],
        collapseSimple: true,
        detectStretched: true,
        collapsedOnInit: true,
        defaultOpacity: 0.7,
        visibleIcon: 'icon icon-eye',
        hiddenIcon: 'icon icon-eye-slash'
    })
    map.addControl(legendLand);