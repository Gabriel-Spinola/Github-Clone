function changeLocation(newLocation) {
    location.href = `${ window.location.href }?route=${ newLocation }`; 
    alert("Changed")
}