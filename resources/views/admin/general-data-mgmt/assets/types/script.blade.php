<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.general.assets.types.index') }}'
        }
    });

    function showAssetType(id) {
        var route = `{{ route('admin.general.assets.types.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditAssetType input[name=id]").val(data.id);
                $("#formEditAssetType input[name=name]").val(data.name);
                $("#formEditAssetType select[name=type]").val(data.type);
                $("#formEditAssetType textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
