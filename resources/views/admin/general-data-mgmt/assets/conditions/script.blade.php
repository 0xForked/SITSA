<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.general.assets.conditions.index') }}'
        }
    });

    function showAssetCondition(id) {
        var route = `{{ route('admin.general.assets.conditions.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditAssetCondition input[name=id]").val(data.id);
                $("#formEditAssetCondition input[name=name]").val(data.name);
                $("#formEditAssetCondition textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
