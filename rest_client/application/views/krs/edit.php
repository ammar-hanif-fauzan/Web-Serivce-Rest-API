<?php echo form_open('krs/edit');?>
<?php echo form_hidden('kode_mk',$krs[0]->kode_mk);?>
 
<table>
    <tr><td>nim</td><td><?php echo form_input('',$krs[0]->nim,"disabled");?></td></tr>
    <tr><td>jurusan</td><td><?php echo form_input('nama_jurusan',$krs[0]->nama_jurusan);?></td></tr>
    <tr><td>kode_jurusan</td><td><?php echo form_input('nama_mk');?>  </td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('krs','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>