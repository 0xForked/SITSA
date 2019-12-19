<script>
    $(document).ready(function() {
        $("#from_year_add_datepicker").datepicker({
            format: " yyyy", // Notice the Extra space at the beginning
            viewMode: "years",
            minViewMode: "years"
        });
        $("#to_year_add_datepicker").datepicker({
            format: " yyyy", // Notice the Extra space at the beginning
            viewMode: "years",
            minViewMode: "years"
        });
        $("#from_year_edit_datepicker").datepicker({
            format: " yyyy", // Notice the Extra space at the beginning
            viewMode: "years",
            minViewMode: "years"
        });
        $("#to_year_edit_datepicker").datepicker({
            format: " yyyy", // Notice the Extra space at the beginning
            viewMode: "years",
            minViewMode: "years"
        });
    });


    function loadPeriodeDetail(id) {
        var route = `{{ route('admin.profile.period.index') }}/${id}`
        $.ajax({
            type: 'GET',
            url: route,
            success: function(data) {
                $("#from_year_edit_datepicker").val(data.from);
                $("#to_year_edit_datepicker").val(data.to);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>