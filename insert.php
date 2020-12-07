<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con ,'mygym');

extract($_POST);

if(isset($_POST['submit'])){
    $q = "insert into members (name,phone,email,age,sex) values ('$name','$mobile','$email','$age','$gender')";
    // $q = "INSERT INTO members (`name`, `phone`, `email`, `age`, `sex`) VALUES ( $name, $ph, $email, $age, $sex);"
        $qr = mysqli_query($con,$q);
    // $uid = "Select id from members where email=$email";

   
        header('location:signup.php');
}


if(isset($_POST['displaybtn'])){
    $quary = "Select *from members";
    $quary_run = mysqli_query($con, $quary);

    echo"
    table cellpadding=5; cellspacing=5;>
    <tr>
        <th>Name</th>
        <th>Phone NO</th>
        <th>E-mails</th>
        <th>Age</th>
        <th>Gender</th>
    </tr>";

    if($quary_run){
        while($row = mysqli_fetch_array($quary_run)){
           
            echo "
            <tr>
                <td> $row[name]</td>
                <td>$row[phone]</td>
                <td> $row[email]</td>
                <td> $row[age]</td>
                <td>$row[sex]</td>
            </tr>";
        }
    }
    echo"</table>";
}
?>


<script type="text/javascript">



</script>
