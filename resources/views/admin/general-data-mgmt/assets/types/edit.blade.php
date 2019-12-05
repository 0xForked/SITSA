<div
    class="modal fade"
    tabindex="-1"
    role="dialog"
    id="editAssetType"
>
    <div
        class="modal-dialog"
        role="document"
    >
        <form
            method="POST"
            action="{{ route('admin.general.assets.types.update') }}"
            id="formEditAssetType"
        >
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Ubah Data Tipe Asset!
                    </h5>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tipe</label>
                        <select class="form-control" name="type">
                            <option value="NONE">Pilih Tipe</option>
                            <option value="BERGERAK">Bergerak</option>
                            <option value="TIDAK_BERGERAK">Tidak Bergerak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control h-auto" name="description"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="mr-auto">
                        <a href="#">Butuh bantuan?</a>
                    </div>
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
                        Tutup
                    </button>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Perbaharui
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
