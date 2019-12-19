<div
    class="modal fade"
    tabindex="-1"
    role="dialog"
    id="editCongregationPeriode"
>
    <div
        class="modal-dialog"
        role="document"
    >
        <form
            method="POST"
            action=""
            id="formEditCongregationPeriode"
        >
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Perbaharui data Periode Pelayanan!
                    </h5>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label>Dari tahun</label>
                        <input class="form-control" type="text" name="from_year" id="from_year_edit_datepicker">
                    </div>
                    <div class="form-group">
                        <label>Sampai tahun</label>
                        <input class="form-control" type="text" name="to_year" id="to_year_edit_datepicker">
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
                        Tutup
                    </button>
                    <button
                        onclick=""
                        type="submit"
                        class="btn btn-primary"
                    >
                        Perbaharui
                    </button>
                    <button
                        onclick=""
                        type="submit"
                        class="btn btn-primary"
                    >
                        Perbaharui & Aktifkan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
