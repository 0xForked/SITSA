@extends('layouts._body.admin')

@section('title', 'Pengaturan Aplikasi')

@section('content')
<div class="section-body">
    <h2 class="section-title">Pengaturan</h2>
    <p class="section-lead">Atur pengaturan dan maksimalkan penggunaan.</p>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div id="output-status"></div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Menu Pengaturan</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills flex-column" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                data-toggle="pill"
                                role="tab"
                                id="pills-general-tab"
                                href="#pills-general"
                                aria-controls="pills-general"
                                aria-selected="true"
                            >Umum</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                data-toggle="pill"
                                role="tab"
                                id="pills-contact-tab"
                                href="#pills-contact"
                                aria-controls="pills-contact"
                                aria-selected="true"
                            >Contact</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                data-toggle="pill"
                                role="tab"
                                id="pills-backup-tab"
                                href="#pills-backup"
                                aria-controls="pills-backup"
                                aria-selected="true"
                            >Backup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="tab-content" id="pills-tabContent">

                <div
                    class="tab-pane fade show active"
                    id="pills-general"
                    role="tabpanel"
                    aria-labelledby="pills-general-tab">
                    <form id="setting-form">
                        <div class="card" id="settings-card">
                            <div class="card-header">
                                <h4>General Settings</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    General settings such as, site title, site description, address and so on.
                                </p>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Site Title</label>
                                    <div class="col-sm-6 col-md-9">
                                    <input type="text" name="site_title" class="form-control" id="site-title">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-description" class="form-control-label col-sm-3 text-md-right">Site Description</label>
                                    <div class="col-sm-6 col-md-9">
                                        <textarea class="form-control h-auto" name="site_description" id="site-description" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="form-control-label col-sm-3 text-md-right">Site Logo</label>
                                    <div class="col-sm-6 col-md-9">
                                        <div class="custom-file">
                                            <input type="file" name="site_logo" class="custom-file-input" id="site-logo">
                                            <label class="custom-file-label">Choose File</label>
                                        </div>
                                        <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="form-control-label col-sm-3 text-md-right">Favicon</label>
                                    <div class="col-sm-6 col-md-9">
                                        <div class="custom-file">
                                            <input type="file" name="site_favicon" class="custom-file-input" id="site-favicon">
                                            <label class="custom-file-label">Choose File</label>
                                        </div>
                                        <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-whitesmoke text-md-right">
                                <button class="btn btn-primary" id="save-btn">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>


                <div
                    class="tab-pane fade"
                    id="pills-contact"
                    role="tabpanel"
                    aria-labelledby="pills-contact-tab">
                    <form id="setting-form">
                        <div class="card" id="settings-card">
                            <div class="card-header">
                                <h4>Contact Settings</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    Kontak Dasar
                                </p>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Alamat Kantor</label>
                                    <div class="col-sm-6 col-md-9">
                                    <input type="text" name="site_title" class="form-control" id="site-title">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nomor Ponsel Kantor</label>
                                    <div class="col-sm-6 col-md-9">
                                    <input type="text" name="site_title" class="form-control" id="site-title">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">E-Mail Kantor</label>
                                    <div class="col-sm-6 col-md-9">
                                    <input type="text" name="site_title" class="form-control" id="site-title">
                                    </div>
                                </div>
                                <p class="text-muted">
                                    Sosial Media
                                </p>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Facebook</label>
                                    <div class="col-sm-6 col-md-9">
                                    <input type="text" name="site_title" class="form-control" id="site-title">
                                    </div>
                                </div>
                                 <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Twitter</label>
                                    <div class="col-sm-6 col-md-9">
                                    <input type="text" name="site_title" class="form-control" id="site-title">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Instagram</label>
                                    <div class="col-sm-6 col-md-9">
                                    <input type="text" name="site_title" class="form-control" id="site-title">
                                    </div>
                                </div>
                                <p class="text-muted">
                                    Peta
                                </p>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Titik Kordinat</label>
                                    <div class="col-sm-6 col-md-9">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-text text-muted">Latitude</div>
                                                <input type="text" class="form-control" placeholder="e.g: 1.121212">
                                            </div>
                                            <div class="col">
                                                <div class="form-text text-muted">Longitude</div>
                                                <input type="text" class="form-control" placeholder="e.g: 124.121212">
                                            </div>
                                        </div>
                                        <div class="form-text text-muted">Ambil titik kordinat dari <a href="https://maps.google.com" target="_blank">Google Maps</a>, Anda <a href="">Butuh bantuan?</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-whitesmoke text-md-right">
                                <button class="btn btn-primary" id="save-btn">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>


                <div
                    class="tab-pane fade"
                    id="pills-backup"
                    role="tabpanel"
                    aria-labelledby="pills-backup-tab">
                    <form id="setting-form">
                        <div class="card" id="settings-card">
                            <div class="card-header">
                                <h4>Backup Settings</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-body bg-whitesmoke">
                                                <div class="empty-state" data-height="400">
                                                    <div class="empty-state-icon">
                                                        <i class="fas fa-download"></i>
                                                    </div>
                                                    <h2>Import Basis Data</h2>
                                                    <p class="lead">
                                                        Import skema basis data hasil export.
                                                        (tipe file adalah <a href="https://fileinfo.com/extension/sql">.sql</a>).
                                                    </p>
                                                        <div class="input-group">
                                                            <div class="custom-file text-left" style="margin-top:20px">
                                                                <input type="file" name="database" class="custom-file-input" id="site-favicon">
                                                                <label class="custom-file-label">Choose</label>
                                                            </div>
                                                            <span class="input-group-btn">
                                                                <a href="#" class="btn btn-primary mt-4 ml-2">Import</a>
                                                            </span>
                                                        </div>
                                                    <a href="#" class="mt-4 bb">Butuh bantuan?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-body bg-whitesmoke">
                                                <div class="empty-state" data-height="400">
                                                    <div class="empty-state-icon">
                                                        <i class="fas fa-upload"></i>
                                                    </div>
                                                    <h2>Export Basis Data</h2>
                                                    <p class="lead">
                                                        Export/Backup data anda secara periodik (hasil file adalah <a href="https://fileinfo.com/extension/sql">.sql</a>).
                                                    </p>
                                                    <a href="#" class="btn btn-primary mt-4">Export/Backup</a>
                                                    <a href="#" class="mt-4 bb">Butuh bantuan?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>
</div>
@endsection
