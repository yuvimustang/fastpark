 var LISBON =[-9.1393,38.7222];
    var MADRID =[-3.703790,40.416775];

    const map=tt.map({
        key:"aRx0TX0fWsqZnAVfJ9bhOeDU6XcFkieD",
        container:'map',
        center: [28,50],
        zoom: 14
        
    });
     map.on('load', () => {
        new tt.Marker().setLngLat([28,50]).addTo(map);
         new tt.Marker().setLngLat([28.5,52]).addTo(map);
    });
    tt.services.calculateRoute({
  key: "aRx0TX0fWsqZnAVfJ9bhOeDU6XcFkieD",
  locations: '28,50:28.5,52'
}).then(function(routeData) {
    var geo=routeData.toGeoJson();
    console.log(routeData);
    routeLayer=map.addLayer({
        'id':'route',
        'type':'line',
        'source':{
            'type':'geojson',
            'data':geo
        },
        'paint':{
            'line-color':'red',
            'line-width':50
        }
        
    })
  });