$(document).ready(function () {

    $.ajax({
        type: "POST",
        url: $(".c_refresh").data("url"),
        // data: {my_data: $(".c_refresh").data("order")},

        beforeSend: function() {
            $('.c_spinner').show();
        },

        complete: function() {
            $('.c_spinner').hide();
        },

        success: function(data) {
            $(".c_refresh").html(data);
        },
        error: function() {
            alert('Xəta baş verdi');
        }
    });

});

$(".c_set_order_price").on("click", function () {

    $.ajax({
        type: "POST",
        url: $(this).data("url"),
        data: {order_price: $(this).data("order")},

        beforeSend: function() {
            $('.c_spinner').show();
        },

        complete: function() {
            $('.c_spinner').hide();
        },

        success: function(data) {

            //popularitini default eliyir
            $(".c_refresh_popularity b").html($(".c_refresh_popularity").data("text"));

            //search default eliyir
            $(".c_search_value").val('');
            $(".c_date_value").val('');
            $(".c_date_end_value").val('');


            //price range ucun
            $(".ui-slider-range").css("width", "100%");
            $(".ui-slider-range").css("left", "0");
            $(".ui-slider-range").next().css("left", "0%");
            $(".ui-slider-range").next().next().css("left", "100%");
            $(".amount-start").val($(".amount-start").data("price"));
            $(".amount-end").val($(".amount-end").data("price"));

            $(".c_refresh").html(data);
        },
        error: function() {
            alert('Xəta baş verdi');
        }
    });

});

$(".c_set_order_popularity").on("click",function () {

    $.ajax({
        type: "POST",
        url: $(this).data("url"),
        data: {order_popularity: $(this).data("order")},

        beforeSend: function() {
            $('.c_spinner').show();
        },

        complete: function() {
            $('.c_spinner').hide();
        },

        success: function(data) {

            //qiymeti default eliyir
            $(".c_refresh_price b").html($(".c_refresh_price").data("text"));

            //search default eliyir
            $(".c_search_value").val('');
            $(".c_date_value").val('');
            $(".c_date_end_value").val('');

            //price range ucun
            $(".ui-slider-range").css("width", "100%");
            $(".ui-slider-range").css("left", "0");
            $(".ui-slider-range").next().css("left", "0%");
            $(".ui-slider-range").next().next().css("left", "100%");
            $(".amount-start").val($(".amount-start").data("price"));
            $(".amount-end").val($(".amount-end").data("price"));

            $(".c_refresh").html(data);
        },
        error: function() {
            alert('Xəta baş verdi');
        }
    });

});

$(".c_price_range").on("click", function () {

    $.ajax({
        type: "POST",
        url: $(this).data("url"),
        data: {
            min_price: $(".amount-start").val(), max_price: $(".amount-end").val()
        },

        beforeSend: function() {
            $('.c_spinner').show();
        },

        complete: function() {
            $('.c_spinner').hide();
        },

        success: function(data) {

            //popularitini default eliyir
            $(".c_refresh_popularity b").html($(".c_refresh_popularity").data("text"));

            //qiymeti default eliyir
            $(".c_refresh_price b").html($(".c_refresh_price").data("text"));

            //search default eliyir
            $(".c_search_value").val('');
            $(".c_date_value").val('');
            $(".c_date_end_value").val('');

            $(".c_refresh").html(data);
        },
        error: function() {
            alert('Xəta baş verdi');
        }
    });

});

$(".c_search_submit").on("click", function () {

    $.ajax({
        type: "POST",
        url: $(this).data("url"),
        data: {
            search_value: $(".c_search_value").val(), date_value: $(".c_date_value").val(), end_date_value: $(".c_date_end_value").val()
        },

        beforeSend: function() {
            $('.c_spinner').show();
        },

        complete: function() {
            $('.c_spinner').hide();
        },

        success: function(data) {

            //qiymeti default eliyir
            $(".c_refresh_price b").html($(".c_refresh_price").data("text"));

            //popularitini default eliyir
            $(".c_refresh_popularity b").html($(".c_refresh_popularity").data("text"));

            //price range ucun
            $(".ui-slider-range").css("width", "100%");
            $(".ui-slider-range").css("left", "0");
            $(".ui-slider-range").next().css("left", "0%");
            $(".ui-slider-range").next().next().css("left", "100%");
            $(".amount-start").val($(".amount-start").data("price"));
            $(".amount-end").val($(".amount-end").data("price"));

            $(".c_refresh").html(data);
        },
        error: function() {
            alert('Xəta baş verdi');
        }
    });

})


$('[data-toggle="tooltip"]').tooltip();


