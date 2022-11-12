<form action="<?= base_url('covid19/tambah_aksi')?>" method="POST">
    <div class="form-group">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" >
        <?= form_error('tanggal', '<div class="text-small text-danger">', '<div>'); ?>
    </div>
    <div class="form-group">
        <label>Kasus Baru</label>
        <input type="text" name="kasus_baru" class="form-control" >
        <?= form_error('kasus_baru', '<div class="text-small text-danger">', '<div>'); ?>
    </div>
    <div class="form-group">
        <label>Meninggal</label>
        <input type="text" name="meninggal" class="form-control" >
        <?= form_error('meninggal', '<div class="text-small text-danger">', '<div>'); ?>
    </div>

    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan </button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset </button>
</form>