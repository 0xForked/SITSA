<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.general.assets.obtains.index') }}'
        }
    });

    function showAssetObtain(id) {
        var route = `{{ route('admin.general.assets.obtains.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditAssetObtain input[name=id]").val(data.id);
                $("#formEditAssetObtain input[name=name]").val(data.name);
                $("#formEditAssetObtain textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
