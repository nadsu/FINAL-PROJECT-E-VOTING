<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pemilih</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
            <!-- table  -->
			<table id="example1" class="table table-bordered table-striped">
                <!-- header table  -->
				<thead>
					<tr>
						<th>No.</th>
						<th>NPM</th>
						<th>Nama Pemilih</th>
						<th>Status</th>
	
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
            //   mengambil datda dari db untuk user pemilih 
              $sql = $koneksi->query("select * from tb_user where jenis='PML'");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
                        <!-- menampilkan nomor  -->
						<td>
							<?php echo $no++; ?>
						</td>
                        <!-- menampilkan nik -->
						<td>
							<?php echo $data['nik']; ?>
						</td>
                        <!-- show name  -->
						<td>
							<?php echo $data['namauser']; ?>
						</td>
                        <!-- show status  -->
						<td>
							<?php $stt = $data['status']  ?>
                            <!-- pilihan status  -->
							<?php if($stt == '1'){ ?>
							<span class="badge badge-warning">Belum memilih</span>
							<?php }elseif($stt == '0'){ ?>
							<span class="badge badge-primary">Sudah memilih</span>
						</td>
						<?php } ?>
						</td>
					
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
            <br><br>
			<button onclick="location.href='reportpemilihpdf.php';" id="reportpdf" type="button" class="btn btn-danger">Cetak PDF</button>
	        <button onclick="location.href='reportpemilihxlx.php';" id="reportexcel" type="button" class="btn btn-success">Cetak Excel</button>
		</div>
	</div>
	<!-- /.card-body -->