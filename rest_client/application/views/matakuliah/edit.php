<?php echo form_open('matakuliah/edit');?>
<?php echo form_hidden('kode_mk',$matakuliah[0]->kode_mk);?>
 
<table>
    <tr><td>kode_mk</td><td><?php echo form_input('',$matakuliah[0]->kode_mk,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama_mk',$matakuliah[0]->nama_mk);?></td></tr>
    <tr><td>sks</td><td><?php echo form_input('sks',$matakuliah[0]->sks);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('matakuliah','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
