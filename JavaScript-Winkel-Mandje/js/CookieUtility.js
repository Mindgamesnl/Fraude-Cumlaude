function saveJson(data) {
    document.cookie = escape(JSON.stringify(data));
}

function getJson() {
    if (document.cookie == "") {
        console.log("First visit, there is no cookie");
        return [];
    }

    console.log("Reading cookie");
    return JSON.parse(unescape(document.cookie));
}