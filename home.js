//isotope


    

    var grid = $(".row").isotope({
        itemSelector: '.col',
        layoutMode: 'fitRows'
    });

    $(".btn-group").on("click", "button", function () {
        var filtervalue=$(this).attr('data-filter');
        grid.isotope({
            filter: filtervalue
        });
    });
