<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.region.urbanvillages.index') }}'
        }
    });

    function showUrbanVillage(id) {
        var route = `{{ route('admin.region.urbanvillages.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditUrbanVillage input[name=id]").val(data.id);
                $("#formEditUrbanVillage input[name=name]").val(data.name);
                $("#formEditUrbanVillage input[name=code]").val(data.code);
                $("#formEditUrbanVillage textarea[name=description]").val(data.description);
                $("#formEditUrbanVillage select[name=subdistrict_id]").val(data.subdistrict_id);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
