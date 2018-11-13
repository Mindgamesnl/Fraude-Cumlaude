class CartItem {

    constructor(id, name, text, price) {
        this.id = id;
        this.name = name;
        this.text = text;
        this.price = price;
    }

    //serializor
    toJSON() {
        return {
            id: this.id,
            name:  this.name,
            text:   this.text,
            price: this.price
        };
    }

    get JSON() {
        return this.toJSON();
    }

}