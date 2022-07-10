<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    
    <?php $this->load->view('layouts/_alert') ?>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">List Data Pelaporan Awal Lokasi Bencana</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0" id="dataTable">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Kabupaten / Kota</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Kecamatan</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Desa atau Dusun</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Penduduk Terancam</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Topografi</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Edit</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($content as $row) : ?>
                                    <tr>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->nama_kabkot ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->nama_kec ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->desa_dusun ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->jumlah_penduduk_terancam ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->topografi ?></td>
                                        <!-- Hanya admin yang boleh melakukan aksi pada data -->
                                        <?php if ($this->session->userdata('role') == 'admin') : ?>
                                            <td class="border-top-0 text-center text-muted px-2 py-2">
                                                <a href="<?= base_url("pelaporans/edit/$row->id") ?>" class="btn btn-sm">
                                                    <i class="fas fa-edit text-info"></i>
                                                </a>
                                            </td>
                                            <td class="border-top-0 text-center text-muted px-2 py-2">
                                                <a href="<?= base_url("pelaporans/hapus/$row->id") ?>" class="btn btn-sm">
                                                    <i class="fas fa-trash text-info"></i>
                                                </a>
                                            </td>
                                        <?php endif ?>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <br>
                        <div class="form-actions">
                            <div class="text-right">
                                <a href="<?= base_url('pelaporans') ?>" class="btn btn-dark">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->