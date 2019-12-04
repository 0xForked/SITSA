<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.general.bloods.index') }}'
        }
    });

    function showBlood(id) {
        var route = `{{ route('admin.general.bloods.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditBlood input[name=id]").val(data.id);
                $("#formEditBlood input[name=name]").val(data.name);
                $("#formEditBlood select[name=type]").val(data.type);
                $("#formEditBlood textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
