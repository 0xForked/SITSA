<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.region.regions.index') }}'
        }
    });

    function showRegion(id) {
        var route = `{{ route('admin.region.regions.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditRegion input[name=id]").val(data.id);
                $("#formEditRegion input[name=name]").val(data.name);
                $("#formEditRegion input[name=code]").val(data.code);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
