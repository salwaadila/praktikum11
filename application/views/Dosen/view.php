<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Dosen STT Terpadu Nurul Fikri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Biodata Dosen</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        
        <div class="row mb-2">
          <div class="col-sm-8">
          <table class="table table-striped">
    <tbody>
        <tr><td>NIDN</td><td class= "text-center"><?=$list_dsn->nidn?></td></tr>
        <tr><td>Nama</td><td class= "text-center"><?=$list_dsn->nama?></td></tr>
        <tr><td>Gender</td><td class= "text-center"><?=$list_dsn->gender?></td></tr>
        <tr><td>Tempat Lahir</td><td class= "text-center"><?=$list_dsn->tmp_lahir?></td></tr>
        <tr><td>Tanggal Lahir</td><td class= "text-center"><?=$list_dsn->tgl_lahir?></td></tr>
        <tr><td>Pendidikan</td><td class= "text-center"><?=$list_dsn->pendidikan_akhir?></td></tr>
        <tr><td>Program Studi</td><td class= "text-center"><?=$list_dsn->prodi_kode?></td></tr>
    </tbody>
    </table>
          </div>
          <div class="col-sm-4">
            Ini Foto
          </div>
        </div>      

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
