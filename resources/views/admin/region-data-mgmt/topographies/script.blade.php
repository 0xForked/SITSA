<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.region.topographies.index') }}'
        }
    });

    function showTopography(id) {
        var route = `{{ route('admin.region.topographies.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditTopography input[name=id]").val(data.id);
                $("#formEditTopography input[name=name]").val(data.name);
                $("#formEditTopography input[name=code]").val(data.code);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
