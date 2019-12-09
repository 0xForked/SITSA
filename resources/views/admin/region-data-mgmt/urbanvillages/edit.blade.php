<div
    class="modal fade"
    tabindex="-1"
    role="dialog"
    id="editUrbanVillage"
>
    <div
        class="modal-dialog"
        role="document"
    >
        <form
            method="POST"
            action="{{ route('admin.region.urbanvillages.update') }}"
            id="formEditUrbanVillage"
        >
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Perbaharui data Kelurahan/Desa
                    </h5>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kode</label>
                        <input type="number" name="code" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control h-auto" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <select class="form-control" name="subdistrict_id">
                            @foreach ($subdistricts as $subdistrict)
                                <option value="{{$subdistrict->id}}">{{$subdistrict->name}}</option>
                            @endforeach
                        </select>
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
                        onclick="updateProcess('editUrbanVillage')"
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
