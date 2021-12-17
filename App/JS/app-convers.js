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
$(document).ready(function (e){
    let $new = $('.new-tickets')
    if ($.trim($new.html()) === ''){
        $new.html('<p class="empty-message empty-message-convers">Aucun ticket</p>');
    }
    function realoadAccount(){

        let xhr = getHttpRequest();
        xhr.open('POST', '../PHP/updateInterface.php', true);
        let data = new FormData();
        data.append('function', 'updateMessage');
        xhr.send(data);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                rep_json = xhr.response;
                let obj = JSON.parse(rep_json);
                $('.m-b-0').appendChild('<li class="clearfix me-msg"></li>');
                $('.clearfix').appendChild('<div class="message-data text-right"></div>');
                $('.message-data').appendChild('<div id="icon-profil-blc-user" class="icon-profile' + obj.color + '">' + obj.letter + '</div>');
                $('.message-data').appendChild('<div class="message-data-time"></div>');
                $('.message-data-time').html(obj.datePost)
                $('.clearfix').appendChild('<div class="message other-message float-right">' + obj.message + '</div>');
            }
        }
    }
})
$(document).ready(function (e){
    let $new = $('.new-tickets')
    if ($.trim($new.html()) === ''){
        $new.html('<p class="empty-message empty-message-convers">Aucun ticket</p>');
    }
    // setInterval(realoadAccount, 3000);
    realoadAccount();
    function realoadAccount(){

        let xhr = getHttpRequest();
        xhr.open('POST', '/App/PHP/updateInterface.php', true);
        let data = new FormData();
        data.append('function', 'updateMessage');
        xhr.send(data);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                rep_json = xhr.response;
                let obj = JSON.parse(rep_json);
                $('.m-b-0').html('');
                $('.m-b-0').appendChild('<li class="clearfix me-msg"></li>');
                $('.clearfix').appendChild('<div class="message-data text-right"></div>');
                $('.message-data').appendChild('<div id="icon-profil-blc-user" class="icon-profile' + obj.color + '">' + obj.letter + '</div>');
                $('.message-data').appendChild('<div class="message-data-time"></div>');
                $('.message-data-time').html(obj.datePost)
                $('.clearfix').appendChild('<div class="message other-message float-right">' + obj.message + '</div>');
            }
        }
    }
});

