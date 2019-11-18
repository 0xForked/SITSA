<script type="text/javascript">
    $('input[type=search]').on('search', function () {
        window.location='{{ route('admin.permissions.index') }}'
    });
</script>
