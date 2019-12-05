<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.general.family-trees.index') }}'
        }
    });

    function showFamilyTree(id) {
        var route = `{{ route('admin.general.family-trees.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditFamilyTree input[name=id]").val(data.id);
                $("#formEditFamilyTree input[name=name]").val(data.name);
                $("#formEditFamilyTree textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
