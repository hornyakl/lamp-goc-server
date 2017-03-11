function getLocation()
{
    var coordinates = document.getElementById("coordinates");

    if (navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
    else
    {
        coordinates.value = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position)
{
    var longitude = position.coords.longitude;
    var latitude = position.coords.latitude;

    document.getElementById("longitude").value = longitude;
    document.getElementById("latitude").value = latitude;
    document.getElementById("coordinates").value = longitude + ", " + latitude;
}
