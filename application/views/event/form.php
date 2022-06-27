<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data barang</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?= form_open_multipart('admin/event/proses') ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Nama Event</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="first-name" class="form-control" name="nama_event" placeholder="Nama Event">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Deskripsi Event</span>
                                </div>
                                <div class="col-md-8">
                                    <textarea name="description" id="ckeditor" cols="30" rows="60"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Tanggal</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="date" id="first-name" class="form-control" name="nama_event" placeholder="Nama Event">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Lokasi</span>
                                </div>
                                <div class="col-md-8">
                                    <select type="password" name="lokasi" value="<?= set_value('lokasi') ?>" class="form-control">
                                        <option value="">- Pilih -</option>
                                        <option value="Koopen Klojen">Koopen Klojen</option>
                                        <option value="Koopen Ijen">Koopen Ijen</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Pamflet</span>
                                </div>
                                <div class="col-md-8">
                                <input type="file" class="form-control" name="image" value="<?= $row->foto_perumahan ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" name="<?= $page ?>" class="btn btn-primary mr-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>