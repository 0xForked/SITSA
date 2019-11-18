<div
    class="modal fade"
    tabindex="-1"
    role="dialog"
    id="addRole"
>
    <div
        class="modal-dialog"
        role="document"
    >
        <form
            method="post"
            action="{{ route('admin.roles.store') }}"
        >
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Create new Role!
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Permissions</label>
                        <select class="custom-select select2" name="permissions[]" multiple style="width:100%">
                            @foreach ($permissions as $permission)
                                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="mr-auto">
                        <a href="#">Need some help?</a>
                    </div>
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
                        Close
                    </button>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Create
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
