<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.general.assets.managers.index') }}'
        }
    });

    function showAssetManager(id) {
        var route = `{{ route('admin.general.assets.managers.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditAssetManager input[name=id]").val(data.id);
                $("#formEditAssetManager input[name=name]").val(data.name);
                $("#formEditAssetManager textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
