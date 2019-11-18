<script type="text/javascript">
    $('#statusModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var status = button.data('status')
        var modal = $(this)
        setStatusButton(status)
    })

    function setStatusButton(status) {
        let container = document.querySelector('#statusButtonContainer')
        let strAvailableData = "";
        if (status == 'ACTIVE') {
            strAvailableData += '<button type="button" class="btn btn-danger" data-dismiss="modal">Deactive</button>'
        } else {
            strAvailableData += '<button type="button" class="btn btn-success" data-dismiss="modal">Active</button>'
        }
        return container.innerHTML = strAvailableData
    }
</script>
