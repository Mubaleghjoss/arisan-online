<h2>TRANSAKSI</h2>
<?php
echo form_open('arisan/tagihan');
?>
<input type="hidden" name="npm" value="<?php echo $record['npm']?>">
<table class="table table-striped table-hover table-responsive">
   <tr>
        <td width="130">NAMA</td>
        <td><div class="col-sm-4"><input type="text" value="<?php echo $record['nama']?>" readonly="" name="nama" class="form-control" placeholder="pembayaran"></div>
       </td>
     </tr>
    <tr>
        <td width="130" class="text-justify" class="text text-danger">PERTEMUAN</td>
        <td><div class="col-sm-4"><input type="text" value="<?php echo $record['pertemuan']?>" name="pertemuan" class="form-control" placeholder="pertemuan"></div>
       </td>
    </tr>
     <tr>
        <td width="130">TANGGAL</td>
        <td><div class="col-sm-4"><input type="date" value="<?php echo $record['tanggal']?>" name="tanggal" class="form-control" placeholder="tahun/bulan/tanggal"></div>
       </td>
     </tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
        <?php echo anchor('arisan','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
        </td>
    </tr>
</table>
</form>


