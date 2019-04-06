/**
 * Class to make XMLHTTPRequest
 */
class AJAXConnection {

    /**
     * Constructor to create new XMLHTTPRequest
     */
    constructor() {
        this.xmlhttp = new XMLHttpRequest();
    }

    /**
     * Method to change content on a page using a method passed if the readyState is valid
     * @param method - GET or POST
     * @param url - php script location
     * @param stateChangeMethod - method that changes what is on the page
     */
    process(method, url, stateChangeMethod) {

        if (this.xmlhttp.readyState === 0 || this.xmlhttp.readyState === 4) {
            this.xmlhttp.open(method, url, true);
            this.xmlhttp.onreadystatechange = stateChangeMethod;
            this.xmlhttp.send(null);
        }
    }
}