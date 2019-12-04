<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.general.jobs.index') }}'
        }
    });

    function showJob(id) {
        var route = `{{ route('admin.general.jobs.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditJob input[name=id]").val(data.id);
                $("#formEditJob input[name=name]").val(data.name);
                $("#formEditJob textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
