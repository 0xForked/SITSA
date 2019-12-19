<div
    class="modal fade"
    tabindex="-1"
    role="dialog"
    id="addCongregationPeriode"
>
    <div
        class="modal-dialog"
        role="document"
    >
        <form
            method="POST"
            action=""
            id="formAddCongregationPeriode"
        >
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Tambah Periode Pelayanan!
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Dari tahun</label>
                        <input class="form-control" type="text" name="from_year" id="from_year_add_datepicker" value="{{date('Y')}}">
                    </div>
                    <div class="form-group">
                        <label>Sampai tahun</label>
                        <input class="form-control" type="text" name="to_year" id="to_year_add_datepicker" value="{{date('Y')}}">
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
                        Tambah
                    </button>
                    <button
                        onclick=""
                        type="submit"
                        class="btn btn-primary"
                    >
                        Tambah & Aktifkan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
