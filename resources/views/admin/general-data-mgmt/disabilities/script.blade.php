<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.general.disabilities.index') }}'
        }
    });

    function showDisability(id) {
        var route = `{{ route('admin.general.disabilities.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditDisability input[name=id]").val(data.id);
                $("#formEditDisability input[name=name]").val(data.name);
                $("#formEditDisability textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
