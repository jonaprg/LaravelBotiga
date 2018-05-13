
$(document).ready(function() {
    $('#products').pinterest_grid({
        no_columns: 4,
        padding_x: 10,
        padding_y: 10,
        margin_bottom: 50,
        single_column_breakpoint: 700
    });
});
$(".btn-update-item").on('click', function(e){
   
    var id = $(this).data('id');
    var href = $(this).data('href');
    var quantity = $("#product_" + id).val();
    window.location.href = href + "/" + quantity;

    e.preventDefault();
});

$(document).ready(function(){
    $('#search').on('keyup',function(){
        $value = $(this).val();
       
        if($value != '') {
            console.log($value);
            $.ajax({

                type: 'get',
                url: '/search',
                data : {'search': $value},
                success:function(data) {
                   
                    $('#products').html(data);
                }
            });
        }
        else{
            console.log("Hello");
        } 
    });
  
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
});