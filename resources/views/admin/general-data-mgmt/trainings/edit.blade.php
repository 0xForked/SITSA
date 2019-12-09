<div
    class="modal fade"
    tabindex="-1"
    role="dialog"
    id="editTraining"
>
    <div
        class="modal-dialog"
        role="document"
    >
        <form
            method="POST"
            action="{{ route('admin.general.trainings.update') }}"
            id="formEditTraining"
        >
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Perbaharui data Jenis Pelatihan!
                    </h5>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control">
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
                        onclick="updateProcess('editTraining')"
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
