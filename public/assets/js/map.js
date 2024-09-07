var myposistion = [];
mapboxgl.accessToken =
    "pk.eyJ1IjoiemFjazQ0IiwiYSI6ImNsMGg2endscDAwMTAzY250YTd6OXlqdjAifQ.Jo5ay5EM7U04-nwnnMtjVQ";
const map = new mapboxgl.Map({
    container: "map", // container ID
    style: "mapbox://styles/mapbox/streets-v11", // style URL
    center: [-7.603869, 33.589886], // starting position
    zoom: 11.15, // starting zoom
});
// Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.NavigationControl());
// save tmp marker into currentMarkers

map.on("click", (e) => {
    //Add Box For Zoning
    var myCircle = new MapboxCircle(
        { lat: e.lngLat.lat, lng: e.lngLat.lng },
        1000,
        {
            editable: true,
            minRadius: 150,
            fillColor: "#29AB87",
            strokeWeight: 2,
            strokeColor: "#29AB87",
            properties: {
                id: "myCircle",
            },
        }
    ).addTo(map);
    //Show Detail For Selected Zoning
    var li = document.createElement("li");
    li.setAttribute("id", myCircle.__instanceId);
    li.classList.add("badge","bg-label-primary","my-1")
    li.innerText = `lat: ${myCircle._currentCenterLngLat[0]}, lng: ${
        myCircle._currentCenterLngLat[1]
    } + ${myCircle.getRadius()} M `;
    document.getElementById("list").append(li);
    //Add Input For Save The Value For Zoning
    var input = document.createElement("input");
    input.setAttribute("type", "hidden");
    input.setAttribute("id", "input" + myCircle.__instanceId);
    input.setAttribute("name", "zone[]");
    input.setAttribute(
        "value",
        `${myCircle._currentCenterLngLat[0]},${
            myCircle._currentCenterLngLat[1]
        },${myCircle.getRadius()}`
    );
    document.getElementById("list").append(input);
    //Event For Circle If On Change The Center Of Location
    myCircle.on("radiuschanged", function (circleObj) {
        var li = document.getElementById(circleObj.__instanceId);
        li.innerText = `lat: ${myCircle._currentCenterLngLat[0]}, lng: ${
            myCircle._currentCenterLngLat[1]
        } + ${myCircle.getRadius()} M `;
        var input = document.getElementById("input" + circleObj.__instanceId);
        input.setAttribute(
            "value",
            `${myCircle._currentCenterLngLat[0]},${
                myCircle._currentCenterLngLat[1]
            },${myCircle.getRadius()}`
        );
    });
    myCircle.on("contextmenu", function (mapMouseEvent) {
        var li = document.getElementById(myCircle.__instanceId);
        var input = document.getElementById("input" + myCircle.__instanceId);
        document.getElementById("list").removeChild(li);
        document.getElementById("list").removeChild(input);
        myCircle.remove();
    });
    myCircle.on("centerchanged", function (circleObj) {
        var li = document.getElementById(circleObj.__instanceId);
        li.innerText = `lat: ${circleObj.getCenter().lat}, lng: ${
            circleObj.getCenter().lng
        } + ${circleObj.getRadius()} M `;
        var input = document.getElementById("input" + circleObj.__instanceId);
        input.setAttribute(
            "value",
            `${circleObj.getCenter().lat},${
                circleObj.getCenter().lng
            },${circleObj.getRadius()}`
        );
    });
});
