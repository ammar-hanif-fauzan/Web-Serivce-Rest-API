<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr><th>NIM</th><th>NAMA</th><th>JURUSAN</th><th>MATKUL</th><th>SKS</th><th>DOSEN</th><th></th></tr>
    <?php
    foreach ($krs as $m){
        echo "<tr>
              <td>$m->nim</td>
              <td>$m->nama_mhs</td>
              <td>$m->nama_jurusan</td>
              <td>$m->nama_mk</td>
              <td>$m->sks</td>
              <td>$m->nama_dosen</td>
              <td>".anchor('krs/edit/'.$m->nim,'Edit')."</td>
              <td>".anchor('krs/delete/'.$m->nim,'Batal')."</td>
              </tr>";
    }
    
    ?>
        <tr><td>
         <?php echo anchor('krs/create/','Add');?></td></tr>
</table>
