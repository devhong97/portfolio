var mapContainer = document.getElementById('map'),
    mapOption = { 
        center: new kakao.maps.LatLng(36.800043207307816, 127.01812722603913), 
        level: 8 
    };
var map = new kakao.maps.Map(mapContainer, mapOption); 

// 마커찍기
var markerPosition  = new kakao.maps.LatLng(36.800043207307816, 127.01812722603913); 
var marker = new kakao.maps.Marker({
    position: markerPosition
});

// 마커 표시
marker.setMap(map);