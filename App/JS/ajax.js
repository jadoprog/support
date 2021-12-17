var getHttpRequest = function () {
    var httpRequest = false;

    if (window.XMLHttpRequest) { // Mozilla, Safari,...
        httpRequest = new XMLHttpRequest();
        if (httpRequest.overrideMimeType) {
        httpRequest.overrideMimeType('text/xml');
        }
    }
    else if (window.ActiveXObject) { // IE
        try {
        httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e) {
        try {
            httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (e) {}
        }
    }

    if (!httpRequest) {
        alert('Abandon :( Impossible de créer une instance XMLHTTP');
        return false;
    }

    return httpRequest
}

function realoadAccount(){

    let xhr = getHttpRequest();
    xhr.open('POST', 'App/PHP/process/updateTicket.php', true);
    let data = new FormData();
    data.append('function', 'update');
    xhr.send(data);
}
document.getElementById('svg-reload-account').addEventListener('click', realoadAccount);