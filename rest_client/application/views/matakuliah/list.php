<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr><th>kode_mk</th><th>nama_mk</th><th>ID JURUSAN</th><th>ALAMAT</th><th></th></tr>
    <?php
    foreach ($matakuliah as $m){
        echo "<tr>
              <td>$m->kode_mk</td>
              <td>$m->nama_mk</td>
              <td>$m->sks</td>
              <td>".anchor('matakuliah/edit/'.$m->kode_mk,'Edit')."
                  ".anchor('matakuliah/delete/'.$m->kode_mk,'Delete')."</td>
              </tr>";
    }
    
    ?>
        <tr><td>
         <?php echo anchor('matakuliah/create/','Add');?></td></tr>
</table>
