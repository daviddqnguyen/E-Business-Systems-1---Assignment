simpleCart({
    cartStyle: "table", // Display cart contents as a table.
    currency: "AUD",    // Australian dollars is used as the currency
    taxRate: 0.1,       // The tax rate is set to reflect the Australian GST rate of 10%

    cartColumns: [
        // Add image to cart contents table
        {view: function(item, column){
            return "<img src='" + item.get('image') + "' class='product_image'>";
            },
            attr: "image", label: "Product Image",
        }
    ]

    checkout: {
        type: "SendForm" ,
        method: "POST", // Set to "GET" or "POST". Default is "POST".
        url: "http://saturn.csit.rmit.edu.au/~"
    }
});

