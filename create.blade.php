<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-md-12"> 
            <div class="card" style="margin-top: 10px;">
                <div class="card-header">
                    <div class="float-sm-left"> <p>Tambah Data Barang</p> </div> 
                </div>
              <!-- /.card-header -->
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('barang.store') }}" method="post"> {{ csrf_field() }} 
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Nama Barang</label> 
                             <div class="col-sm-6"> 
                                <input type="text" class="form-control" name="nama_barang"> 
                                <div class="text-danger">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Stock</label> 
                             <div class="col-sm-6"> 
                                <input type="number" class="form-control" name="stock"> 
                                <div class="text-danger">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Merk</label> 
                             <div class="col-sm-6"> 
                                <input type="text" class="form-control" name="merk"> 
                                <div class="text-danger">
                                </div>
                             </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-offset-5 col-sm-6"> 
                                <button type="submit" class="btn btn-primary">Simpan</button> 
                            </div> 
                        </div> 
                    </form>
                </div>
            </div> 
        </div> 
    </div> 
</div> 
