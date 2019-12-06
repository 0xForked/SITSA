<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.region.subdistricts.index') }}'
        }
    });

    function showSubdistrict(id) {
        var route = `{{ route('admin.region.subdistricts.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditSubdistrict input[name=id]").val(data.id);
                $("#formEditSubdistrict input[name=name]").val(data.name);
                $("#formEditSubdistrict input[name=code]").val(data.code);
                $("#formEditSubdistrict textarea[name=description]").val(data.description);
                $("#formEditSubdistrict select[name=district_id]").val(data.district_id);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
