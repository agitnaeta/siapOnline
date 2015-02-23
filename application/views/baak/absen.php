<html>	
<table class="table table-condensed table-bordered" border="1">
  <tr>
      <th class="bg-primary" colspan="26"><button class="btn-primary btn btn-sm"><i class="glyphicon glyphicon-print"></i> Cetak</button></th>
  </tr>
  <tr>
    <th rowspan="2">NO</th>
    <th rowspan="2">NIM</th>
    <th rowspan="2">NAMA<br>MAHASISWA</th>
    <th colspan="20">Paraf Dan Tanggal Perkuliahan</th>
    <th>JML</th>
    <th>%</th>
    <th>Keterangan</th>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
    <td>11</td>
    <td>12</td>
    <td>13</td>
    <td>14</td>
    <td>15</td>
    <td>16</td>
    <td>17</td>
    <td>18</td>
    <td>19</td>
    <td>20</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
<?php $no=1; foreach ($absen->result() as $key): ?>
  <tr>
    <td><?php echo $no ++; ?></td>
    <td><?php echo $key->nim;?></td>
    <td><?php echo $key->nama;?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
<?php endforeach ;?>
</table>	
</html>