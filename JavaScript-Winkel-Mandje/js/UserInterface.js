//setup html onload event handler

const onPageLoad = function () {
    let itteration = 1;
    items.forEach(function (cartItem) {
        let table = document.getElementById("items-table");

        let row = table.insertRow(itteration++);

        //id
        row.insertCell(0).innerText = "#" + cartItem.id;
        row.insertCell(1).innerText = cartItem.name;
        row.insertCell(2).innerText = cartItem.text;
        row.insertCell(3).innerHTML = "&euro; " + cartItem.price;
        row.insertCell(4).innerHTML = "<input type=\"button\" class=\"button\" value=\"Add to cart\" onclick=\"addToCart(%)\">".replace('%', cartItem.id);
    });

    renderCart();
};

//setup event executor
onload = onPageLoad;

//add to cart
function addToCart(target) {
    let currentCart = getJson();
    currentCart.push(items[target - 1]);
    saveJson(currentCart);

    renderCart();
}

//remove from cart
function removeFromCart(id) {
    let cartContents = getJson();

    let index = -1;
    let i = 0;

    cartContents.forEach(function (item) {
        if (item.id == id) {
            index = i;
            cartContents.splice(index, 1);
            saveJson(cartContents);
            renderCart();
            return;
        }
        i++;
    })
}

function clearCart() {
    document.cookie = "";
    renderCart();
}

//render jouw wagentje
function renderCart() {
    //clear the table
    let rows = document.getElementById("cart-table").rows;
    let i = rows.length;
    while (--i) {
        rows[i].parentNode.removeChild(rows[i]);
    }

    //add elements to table
    let itteration = 1;
    getJson().forEach(function (cartItem) {
        let table = document.getElementById("cart-table");

        let row = table.insertRow(itteration++);

        //id
        row.insertCell(0).innerText = "#" + cartItem.id;
        row.insertCell(1).innerText = cartItem.name;
        row.insertCell(2).innerText = cartItem.text;
        row.insertCell(3).innerHTML = "&euro; " + cartItem.price;
        row.insertCell(4).innerHTML = "<input type=\"button\" class=\"button-red\" value=\"Remove from cart\" onclick=\"removeFromCart(%)\">".replace('%', cartItem.id);
    });
}