<?php
 foreach($siswa as $sw){
     echo "<tr>";
     echo "<td>".$sw->nis_siswa."</td>";
     echo "<td>".$sw->nama_siswa."</td>";
     echo "<td>".$sw->value_weighted."</td>";
 }
 ?>