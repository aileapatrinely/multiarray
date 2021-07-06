<table>
<style type="text/css">

tr,th, td{
    border:1px solid black;
    padding: 10px;
}
table{
    border-spacing: 0px;
}
tr:nth-child(even){
    background-color: grey;
}
</style>
<tr>
<th><?=""?></th>
<?php   for($a=1; $a<=9; $a++)
    {   ?>
        <th scope="col"><?=$a?></th>
<?php } ?>
</tr>
<?php   for($i=1; $i<=9; $i++)
    {   ?>
    <tbody>
    <tr>
    <th scope="row"><?=$i?></th>
<?php   for($j=1; $j<=9; $j++)
    {   ?> 
        <td><?= $i * $j ?></td>
<?php } ?>
    </tr>
    </tbody>
<?php } ?>
</table>