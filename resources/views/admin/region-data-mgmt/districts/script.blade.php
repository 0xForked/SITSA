<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.region.districts.index') }}'
        }
    });

    function showDistrict(id) {
        var route = `{{ route('admin.region.districts.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditDistrict input[name=id]").val(data.id);
                $("#formEditDistrict input[name=name]").val(data.name);
                $("#formEditDistrict input[name=code]").val(data.code);
                $("#formEditDistrict textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
