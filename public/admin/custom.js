// For SubCategory selection on category change
$(document).ready(function () {
    $('select[name="product_category"]').change(function (e) {
        e.preventDefault();
        var category = $(this).val();
        if (category) {
            $.ajax({
                url: "/admin/get/subcategory/" + category,
                method: "get",
                dataType: "html",
                success: function (data) {
                    $('select[name="product_subcategory"]').empty();
                    $('select[name="product_subcategory"]').append(data);
                }
            })
        } else {
            $('select[name="product_subcategory"]').empty();
        }

    });

});

// Picture Show on select
function readURL(input){
    if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#one')
            .attr('src', e.target.result)
            .width(80)
            .height(80);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// Picture Show on select
function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#two')
                .attr('src', e.target.result)
                .width(80)
                .height(80);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// Picture Show on select
function readURL3(input){
    if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#three')
            .attr('src', e.target.result)
            .width(80)
            .height(80);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// Picture Show on select
function readURL4(input){
    if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#four')
            .attr('src', e.target.result)
            .width(80)
            .height(80);
        };
        reader.readAsDataURL(input.files[0]);
    }
}


