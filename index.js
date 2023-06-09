// banner owl
$(document).ready(function () {

    // banner owl
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // top sale owl
    $(document).ready(function () {
        $("#top-sale .owl-carousel").owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
    });

    // isotope filter
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    })

    // product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    // let $input = $(".qty .qty-input");

    // click on qty up button
    $qty_up.click(function(e){
        
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "Template/ajax.php",type: "post",data:{itemid:$(this).data("id")},success:function(result){
            let obj = JSON.parse(result);
            let item_price = obj[0]['item_last_price'];
            let qty_val;

            if($input.val() >= 1 && $input.val() <= 9){
                $input.val(function(i,oldval){
                    qty_val = ++oldval;
                    return oldval;
                });
                console.log(qty_val);
                // increase price of the product
                var price = parseInt(item_price * $input.val());
                var formattedPrice = price.toLocaleString('vi-VN', {
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0,
                  });
                $price.text(formattedPrice);
    
                // set subtotal price
                var subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                $deal_price.text(subtotal);
            }

        }}); // closing ajax request
    });

    // click on qty down button
    $qty_down.click(function(e){
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "template/ajax.php",type: "post",data:{itemid:$(this).data("id")},success:function(result){
            let obj = JSON.parse(result);
            let item_price = obj[0]['item_last_price'];

            if($input.val() > 1 && $input.val() <= 10){
                $input.val(function(i,oldval){
                    qty_val = --oldval;
                    return oldval;
                });
                console.log(qty_val);
                // increase price of the product
                var price = parseInt(item_price * $input.val());
                var formattedPrice = price.toLocaleString('vi-VN', {
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0,
                  });
                $price.text(formattedPrice);
    
                // set subtotal price
                var subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                $deal_price.text(subtotal);
            }
        }}); // closing ajax request
    });


});