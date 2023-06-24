<h1>DATA ARISAN</h1><br>
<p>
<h4 class="text text-center text-info" >sesuatu yang bisa di tulis ulang bisa di jadikan studi kasus gan</h4></p>
<hr class="class class line-block"> 
<hr>
<table class="table table-striped table-hover table-responsive">
    <tr><th>No</th><th>NPM</th><th>NAMA</th><th>PERTEMUAN</th><th>BAYAR</th><th>TANGGAL</th><th>TOTAL</th><th>TAGIHAN</th></tr>
    <?php
    $no = 1;
    $total=0;
    foreach ($record->result() as $r) {
        echo "<tr>
            <td width='10'>$no</td>
            <td>$r->npm</td>
            <td>$r->nama</td>
            <td>$r->pertemuan</td>
            <td>$r->Bayar</td>
            <td>$r->tanggal</td>
            <td>".$r->Bayar*$r->pertemuan."</td>
            <td>".anchor('arisan/tagihan/'.$r->npm,'BAYAR',array('class'=>'btn btn-primary btn-sm'))."</td>   
            </tr>";
        $total=$total+($r->Bayar*$r->pertemuan);
        $no++;
    }
   ?>
    <tr><td colspan="6"><p align="right">Keseluruhan Rp</p></td><td><?php echo $total; ?></td></tr>
</table>






