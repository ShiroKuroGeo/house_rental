<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#container {
  margin: center;
  font-family: sans-serif;
  width: 100%;




}
  </style>
<div class="container">
  <table border="1" id="customers">
  <tr>
    <th>Unit ID</th>
    <th>Tenants ID</th>
    <th>Rating</th>
    <th>Comment</th>
  </tr>
<?php
include("connection.php");
$query="select * from rating";
$data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['id']."</td><td>".$result['t_id']."</td><td>".$result['rating']."</td><td>".$result['comment']."</td></tr>";
}
echo "</table>";
?>

</div>

<div class='newrate'>

</div>
</body>
</html>
