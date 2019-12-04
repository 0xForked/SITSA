<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.general.educations.index') }}'
        }
    });

    function showEducation(id) {
        var route = `{{ route('admin.general.educations.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditEducation input[name=id]").val(data.id);
                $("#formEditEducation input[name=name]").val(data.name);
                $("#formEditEducation textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
