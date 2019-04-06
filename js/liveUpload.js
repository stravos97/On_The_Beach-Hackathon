let ajax = new AJAXConnection();


function liveUpload(str) {
    ajax.process('GET', 'models/script/liveSearch.php?q=' + str, handleResponse);
}

function handleResponse() {

    if (ajax.xmlhttp.readyState === 4 && ajax.xmlhttp.status === 200) {
        let JSONData = JSON.parse(ajax.xmlhttp.responseText);
    }

}