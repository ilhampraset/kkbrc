<div class="modal fade" id="modal-tambah">
    <form id="form-tambah" data-parsley-validate method="POST" action="">
    {{ csrf_field() }} {{ method_field('POST') }}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Tambah Data</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <input id="id" name="id" type='hidden'>
                        <div class="form-group">
                            <label class="col-md-4 col-sm-4 col-xs-12 control-label">Status</label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <select class="required form-control input-xs" name="status" id="status">
                                    @for($i = 0; $i < 4; $i++)
                                        <option value="{{ $i }}">{{ config('flag_peserta.'.$i) }}</option>
                                    @endfor
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-sm-4 col-xs-12 control-label">Nama</label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <input id="nama" name="nama" class="form-control input-xs" placeholder="Nama" type="text" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-sm-4 col-xs-12 control-label">Email</label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <input id="email" name="email" class="form-control input-xs" placeholder="Email" type="text" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-sm-4 col-xs-12 control-label">Represent</label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <input id="represent" name="represent" class="form-control input-xs" placeholder="Represent" type="text" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-sm-4 col-xs-12 control-label">Coffeshop</label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <input id="coffeeshop" name="coffeeshop" class="form-control input-xs" placeholder="Coffeshop" type="text" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-sm-4 col-xs-12 control-label">Phone</label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <input id="phone" name="phone" class="form-control input-xs" placeholder="Phone" type="text" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button data-dismiss="modal" class="btn btn-warning" type="button">Batal</button>
                        <button id="simpan" class="btn btn-success" type="submit">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
