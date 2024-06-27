$(document).ready(function() {

    //Category Select 2
    $('.size-color').select2();

    //Append Value for remove post
    // $('body').on('click','#remove_logo_key',function() {
    //     var logoID = $(this).attr('data-value');
    //     // alert(logoID);
    //     $('#remove_id').val(logoID);
    // })

    // logo
    $('body').on('click','#update_logo_key',function() {
        var logoSrc = $(this).attr('data-value');
        var logoID = $(this).attr('data-id');
        $('#update_id').val(logoID);
        $('#old_logo').attr('src',logoSrc);
    })
    $('body').on('click','#remove_logo_key',function() {
        var logoId = $(this).attr('data-value');
        $('#remove_id').val(logoId);
    })


    // category
    $('body').on('click','#update_category_key',function() {
        var category = $(this).attr('data-value');
        var categoryID = $(this).attr('data-id');
        $('#new_category').val(category);
        $('#category_id').val(categoryID);
    })
    $('body').on('click','#remove_category_key',function() {
        var logoId = $(this).attr('data-value');
        $('#remove_id').val(logoId);
    })

    // product
    // $('body').on('click','#update_product_key',function() {
    //     var logoSrc = $(this).attr('data-value');
    //     var logoID = $(this).attr('data-id');
    //     $('#update_id').val(logoID);
    //     $('#old_logo').attr('src',logoSrc);
    // })
    $('body').on('click','#remove_product_key',function() {
        var productId = $(this).attr('data-value');
        $('#remove_id').val(productId);
    })

    // news
    $('body').on('click','#remove_news_key',function() {
        var newsId = $(this).attr('data-value');
        $('#remove_id').val(newsId);
    })

});
