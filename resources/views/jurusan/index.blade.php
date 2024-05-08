@extends('layouts.master')

@section('title','Data Jurusan')
@section('heading','Data Jurusan')

@section('bc')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Jurusan</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Data Jurusan</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        
        <div class="container mt-3">
            <div align="right">
            <a href="form_administrasi.php" class="btn btn-info">Tambah</a> 
            </div>
        </div>    
        <div class="card-body">
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                  <thead>
                  <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nama</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Alamat</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Kelas</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Jurusan</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                </thead>
                  <tbody>
                  <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    <td>
                        <div class="container mt-3">
                            <a href="/update/" class="btn btn-info">update</a> 
                        </div>    
                        <div class="container mt-3">
                            <div align="right">
                                <a href="/hapus/" class="btn btn-info">Hapus</a> 
                            </div>
                            
                        </div>  
                
                    </td>
                  </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
              
</div>
        
</div>

   
</div>
@endsection