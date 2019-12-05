<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.region.positions.index') }}'
        }
    });

    function showRegionPosition(id) {
        var route = `{{ route('admin.region.positions.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditRegionPosition input[name=id]").val(data.id);
                $("#formEditRegionPosition input[name=name]").val(data.name);
                $("#formEditRegionPosition textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
