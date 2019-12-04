<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.general.trainings.index') }}'
        }
    });

    function showTraining(id) {
        var route = `{{ route('admin.general.trainings.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditTraining input[name=id]").val(data.id);
                $("#formEditTraining input[name=name]").val(data.name);
                $("#formEditTraining textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
