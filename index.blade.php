<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-md-12">
            <div class="card" style="margin-top: 10px;">
                <div class="card-header">
                <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang</a>
                    <div class="float-sm-right"> <p>Data Barang</p> </div> 
                </div>
              <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table id="example2" class="table table-hover text-nowrap">
                  <thead>
                    <tr> 
                        <th>No</th> 
                        <th>Nama Barang</th>  
                        <th>Stock</th> 
                        <th>Merk</th>
                        <th>Aksi</th> 
                    </tr> 
                  </thead>
                  <tbody>
                       @foreach ($barang as $i => $p) 
                            <tr> 
                                <td>{{ $i+1 }}</td> 
                                <td>{{ $p->nama_barang }}</td> 
                                <td>{{ $p->stock }}</td>
                                <td>{{ $p->merk }}</td>
                                <td>
                                    <form method="post" action="{{ route('barang.destroy',$p->id_barang) }}"> {{ csrf_field() }}  
                                    <a href="{{ route('barang.show',$p->id_barang) }}" class="btn btn-warning"> Detail</a>
                                    <a href="{{ route('barang.edit',$p->id_barang) }}" class="btn btn-success"> Edit</a>
                                    <input type="hidden" name="_method" value="DELETE"> 
                                        <button class="btn btn-danger" type="submit">Hapus</button> 
                                    </form>
                                </td> 
                            </tr> 
                        @endforeach 
                  </tbody>
                </table>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div> 
    </div> 
</div> 
