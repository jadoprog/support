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
    xhr.open('POST', '../ressources/processAjax.php', true);
    let data = new FormData();
    data.append('function', 'reloadAccount');
    xhr.send(data);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            rep_json = xhr.response;
            let obj = JSON.parse(rep_json);
            document.getElementById('name-profil-blc').innerHTML = obj.name;
            document.getElementById('firstname-profil-blc').innerHTML = obj.firstname;
            document.getElementById('firstname-menu-blc').innerHTML = obj.firstname;
            document.getElementById('ident-profil-blc').innerHTML = obj.pseudo;
            document.getElementById('mail-profil-blc').innerHTML = obj.email;
            document.getElementById('icon-profil-blc-user').innerHTML = obj.firstname[0];
        }
    }
    // document.getElementById('firstname-profil-blc').innerHTML = 
    
}
document.getElementById('svg-reload-account').addEventListener('click', realoadAccount);
// documeny.getgetElementById('svg-add-ticket').addEventListener('click', )