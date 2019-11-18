<div
    class="modal fade"
    tabindex="-1"
    role="dialog"
    id="detailRole"
>
    <div
        class="modal-dialog"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Role detail!
                </h5>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Name</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        disabled
                    >
                </div>
                <div class="form-group">
                    <label>Guard</label>
                    <input
                        type="text"
                        name="alias"
                        id="alias"
                        class="form-control"
                        disabled
                    >
                </div>

                <label>Permission</label>
                <div id="roleDetailContainer"></div>
            </div>
        </div>
    </div>
</div>
