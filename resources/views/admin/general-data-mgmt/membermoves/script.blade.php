<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        if($(this).val().length < 1){
            window.location='{{ route('admin.general.member-moves.index') }}'
        }
    });

    function showMemberMoveType(id) {
        var route = `{{ route('admin.general.member-moves.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#formEditMemberMoveType input[name=id]").val(data.id);
                $("#formEditMemberMoveType input[name=name]").val(data.name);
                $("#formEditMemberMoveType textarea[name=description]").val(data.description);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
