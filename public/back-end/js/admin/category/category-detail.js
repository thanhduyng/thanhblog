var CategoryDetailModule = (function () {
        try {
            $('#BTN_Save').on('click', function () {
                var status = $('#BTN_Save').val();
                console.log(status);
                InsertAjax();
            });
        } catch (e) {
            console.log('Event: ' + e.message);
    }

    var InsertAjax = function () {
        try {
            var name = $('#txt_name').val();
            var desc = $('#txt_desc').val();
            var status = $('#txt_status').val();
            //console.log(belong_div);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",// phương thức dữ liệu được truyền đi
                url: "category-detail/create-category/insert-category",
                data: {
                    name: name,
                    desc: desc,
                    status: status,
                },
                success: function (response) {

                    $('#result').html("Insert Success");

                }
            });

        } catch (e) {
            console.log('InsertAjax' + e.message);
        }
    }
})();
