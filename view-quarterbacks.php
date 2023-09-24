<H1>Quarterbacks</H1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Air Yards/Attempt</th>
      </tr>
    </thead>
    <tbody>
<?php
while($quarterback = $quarterbacks->fetch_assoc())  {
?>
  <tr>
    <td><?php echo $quarterback['quarterback_id']; ?> </td>
    <td><?php echo $quarterback['quarterback_name']; ?></td>
    <td><?php echo $quarterback['quarterback_adot']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>