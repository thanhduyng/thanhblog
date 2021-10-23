$(document).ready(function() {
    $('#lstIDCategory').change(function() {
        idCategory = $(this).val();
        $.get('admin/ajax/type-product/' + idCategory, function(data) {
            $('#lstIDType').html(data);
        });
    });

    $('#btnAddImage').click(function() {
        $('#divImage').append(
            '<div style="margin-left: 310px;" class="form-group"><input type="file" id="filImage[]" name="filImage[]" required=""></div>'
        );
    });
});