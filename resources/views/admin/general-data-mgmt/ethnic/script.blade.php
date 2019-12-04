<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.general.ethnics.index') }}'
        }
    });

    function showEthnic(id) {
        var route = `{{ route('admin.general.ethnics.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditEthnic input[name=id]").val(data.id);
                $("#formEditEthnic input[name=name]").val(data.name);
                $("#formEditEthnic textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
