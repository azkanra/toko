<?php $__env->startSection('content'); ?>
<div class="row mt-3">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <h3>Masukan Alamat Penerima</h3>

                <div class="row mb-3">
                    <label for="nama_penerima" class="col-form-label col-sm-3">Nama Penerima</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_penerima" name="namaPenerima" placeholder="Masukan Nama Penerima" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat_penerima" class="col-form-label col-sm-3">Alamat Penerima</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat_penerima" name="alamatPenerima" placeholder="Masukan Alamat Penerima">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tlp" class="col-form-label col-sm-3">No. Hp Penerima</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Masukan Nomor Penerima">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tlp" class="col-form-label col-sm-3">No. Hp Penerima</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Masukan Nomor Penerima">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header text-center p-4">
                <h3>Total Belanja</h3>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label for="totalBelanja" class="col-form-label col-sm-4">Total Belanja </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="totalBelanja" name="totalBelanja" value="200000" dosabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="discount" class="col-form-label col-sm-4">Discount </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="discount" name="discount" value="Rp 0">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ongkir" class="col-form-label col-sm-4">Ongkir</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="ongkir" name="ongkir" value="10000">
                    </div>
                </div>

                <hr>
                <div class="row mb-3">
                    <label for="dibayarkan" class="col-form-label col-sm-4">Total </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="dibayarkan" name="dibayarkan" value="212200">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="diterima" class="col-form-label col-sm-4">Uang diterima </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="diterima" name="diterima" value="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="dikembalikan" class="col-form-label col-sm-4">Uang dikembalikan </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="dikembalikan" name="dikembalikan" value="" readonly>
                    </div>
                </div>
                <button cl ass="btn btn-success w-100">
                    <i class="fas fa-print"></i>
                    print struck
                </button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pelanggan.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/azkanra/toko_kazayya/resources/views/pelanggan/page/checkout.blade.php ENDPATH**/ ?>