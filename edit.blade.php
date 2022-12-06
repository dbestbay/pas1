<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-md-12"> 
            <div class="card" style="margin-top: 10px;">
                <div class="card-header">
                    <div class="float-sm-left"> <p>Ubah Data Barang</p> </div> 
                </div>
              <!-- /.card-header -->
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('barang.update',$barang) }}" method="post"> {{ csrf_field() }} 
                        <input type="hidden" name="_method" value="PUT"> 
                        <div class="form-group row"> 
                            <label class="control-label col-sm-2">Nama barang</label> 
                        <div class="col-sm-10"> 
                        <input type="text" class="form-control" name="nama_barang" value="{{ $barang->nama_barang }}"> 
                        </div> 
                        </div> 
                        <input type="hidden" name="_method" value="PUT"> 
                        <div class="form-group row"> 
                            <label class="control-label col-sm-2">Stock</label> 
                        <div class="col-sm-10"> 
                            <input type="number" class="form-control" name="stock" value="{{ $barang->stock }}"> 
                        </div> 
                        </div>
                        <input type="hidden" name="_method" value="PUT"> 
                        <div class="form-group row"> 
                            <label class="control-label col-sm-2">Merk</label> 
                        <div class="col-sm-10"> 
                            <input type="text" class="form-control" name="merk" value="{{ $barang->merk }}"> 
                        </div> 
                        </div>
                        <br>
                        <div class="form-group"> 
                          <div class="col-sm-offset-2 col-sm-6"> 
                            <button type="submit" class="btn btn-primary">Perbaharui Data</button> 
                            <a href="{{ route('barang.index') }}" class="btn btn-danger">Batal</a>
                          </div> 
                        </div> 
                    </form>
                </div>
            </div> 
        </div> 
    </div> 
</div> 
