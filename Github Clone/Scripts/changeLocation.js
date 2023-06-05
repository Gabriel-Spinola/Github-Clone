const changeLocation = (newLocation, mark = false) => {
    if (mark) {
        var loc = window.location.href;

        location.href = `${ loc.slice(30 - 1, loc.indexOf('/')) }${newLocation}`;

        return;
    }

    location.href = `${ window.location.href }${newLocation}`; 
}