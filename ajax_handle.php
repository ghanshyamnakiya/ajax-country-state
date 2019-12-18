<?php
include('dbhelper.php');
$type = $_POST['type'];
$country_id = $_POST['country_id'];
if($type == 'state_list'){
  $sql = "SELECT * FROM state WHERE country_id =".$country_id;
  $dbhelper = new Dbhelper();
  $res = $dbhelper->SelQuery($sql);
  $result = '<select id="state" class="state" name="state">';
        $result .= '<option value="0">Select</option>';
        while ($row = $res->fetch_assoc()) {
          $id = $row['id'];
          $state = $row['state'];
          $result .= '<option value="'.$id.'">'.$state.'</option>';
        }
  echo $result .= '</select>';
}
exit(0);
?>
