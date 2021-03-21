<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row fixed v-100 justify-content-center align-content-center">
        <div class="card v-6x h-9x">
            <div class="card-header">
                <h3>Data Mahasiswa</h3>
                <input class="w-25" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search ..." title="Type in a name">
                <a class="right" href="<?= base_url('/Mahasiswa/create'); ?>"><i class="material-icons" style="font-size:48px;color:#1e8cb8">add_circle</i></a>
            </div>  
            <div class="card-body table-responsive">
                <?php if (!empty(session()->getFlashdata('message'))) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('message'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <table class="table table-hover table-bordered table-responsive">
                    
                        <tr class="bg-info text-center">
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    
                    <?php
                    $no = 1;
                    foreach ($Mahasiswa as $row) {
                    ?>
                    <tbody id="myData">
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->nim; ?></td>
                            <td><?= $row->nama; ?></td>
                            <td><?= $row->prodi; ?></td>
                            <td><?= $row->email; ?></td>
                            <td><?= $row->alamat; ?></td>

                            <td class="text-center">
                                <a title="Edit" href="<?= base_url("Mahasiswa/edit/$row->id_Mahasiswa"); ?>"><i class="material-icons" style="font-size:20px;color: #1e8cb8;">edit</i></a>
                                <a title="Delete" href="<?= base_url("Mahasiswa/delete/$row->id_Mahasiswa") ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"><i class="material-icons" style="font-size:20px;color: #9c1515;">delete</i></a>
                            </td>
                        </tr>
                     
                    </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>