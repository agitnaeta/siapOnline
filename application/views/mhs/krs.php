        <table class="table table-bordered table-hover ">
				<thead class="bg-primary">
					<tr>
						<th width="6%">
				            No
						</th>
                        <th>
				            Kode MK
						</th>
                        <th>
				            Mata Kuliah
						</th>
                        <th>
				            SKS
						</th><th>
				            Kelas
						</th>
					</tr>
				</thead>
                <?php $no=1; foreach  ($krs->result() as $x): ?>
				<tbody>	
                    <td><?php echo $no++;?></td>
                    <td><?php echo $x->kode_mk;?></td>
                    <td><?php echo $x->matakuliah;?></td>
                    <td><?php echo $x->sks;?></td>
                    <td><?php echo "TI-IB";?></td>
				</tbody>
                  <?php endforeach ;?>
			</table>