<?php
include"master.html"; 
include"connect_db.php";
$sql = "SELECT qtext,qid FROM question where qid=1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo $row["qtext"].'<br>';
        echo "</div>";
    }
} else {
    echo "0 results";
}
$query="Select aid, atext from answer where qid=1";
$result2= $conn->query($query);
if ($result->num_rows > 0) {
    while($row2 = $result2->fetch_assoc()){
        $answer=$row2['atext'];
        $aid = $row2['aid'];
      echo'<label style="cursor:pointer;"><input type="radio" name="rads" value="'.$aid.'">'.$answer.'</label>';
}
 echo '<span id="btnSpan"><button onclick="post_answer()">Submit</button></span>';
    } 
?>

