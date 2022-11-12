<?= $this->session->flashdata('pesan'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('covid19/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Insert Kasus Covid-19</a>
        <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-file-import"></i> Import Excel</a>
        <a href="<?= base_url('covid19/exportExcel') ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-file-export"></i> Export to Excel</a>
        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-file-import"></i> Import PDF</a>
        <a href="<?= base_url('covid19/exportPdf') ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-file-export"></i> Export to PDF</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Kasus Baru</th>
                    <th>Meninggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach($covid as $cvd) : ?>
            <tbody>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $cvd->tanggal ?></td>
                    <td><?= $cvd->kasus_baru?></td>
                    <td><?= $cvd->meninggal?></td>
                    <td>
                        <button href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $cvd->id ?>"><i class="fas fa-edit"></i></button>
                        <a href="<?= base_url('covid19/delete/' . $cvd->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Excel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('ImportController/import_excel'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Pilih File</label>
					<input type="file" name="fileExcel">
				</div>
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class='btn btn-primary' type="submit">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			    		Import		
					</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<?php foreach($covid as $cvd){ ?>
<div class="modal fade" id="edit<?= $cvd->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('covid19/edit/' . $cvd->id)?>" method="POST">
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="<?= $cvd->tanggal ?>" >
                <?= form_error('tanggal', '<div class="text-small text-danger">', '<div>'); ?>
            </div>
            <div class="form-group">
                <label>Kasus Baru</label>
                <input type="text" name="kasus_baru" class="form-control" value="<?= $cvd->kasus_baru ?>">
                <?= form_error('kasus_baru', '<div class="text-small text-danger">', '<div>'); ?>
            </div>
            <div class="form-group">
                <label>Meninggal</label>
                <input type="text" name="meninggal" class="form-control" value="<?= $cvd->meninggal ?>">
                <?= form_error('meninggal', '<div class="text-small text-danger">', '<div>'); ?>
            </div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan </button>
              <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset </button>
          </div>
        </form>
      </div>
  </div>
</div>
<?php  }?>


<!-- Modal Import Excel -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
