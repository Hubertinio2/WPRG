<html>
<?php if(kapibaraJeMarchewke()) {?>
    <img src="carrot.jpg">
<?php }else{?>
    <p>Kapibara zjadła marchewke!</p>
<?php }?>
<br><br>
<?php randomizeThree();?>
<br><br>
<form action="" method="post">
    <input type="text" id="pass" name="pass">
    <input type="submit" id="submit" name="submit" value="Check"> <br>
    <?php
    if(isset($_POST["submit"]))
    {
        checkPassword();
    }
    ?>
</form>


<?php
function kapibaraJeMarchewke()
{
    if(rand(1,10) > 4) return true;
    return false;
}
function randomizeThree()
{
    $temp1 = 0;
    $temp2 = 0;
    for($i = 0; $i < 3; $i++)
    {
        do{
            $rand = rand(1,11);
        } while ($rand == $temp1 || $rand == $temp2);
        if ($temp1 == 0) $temp1 = $rand;
        else $temp2 = $rand;
        echo "<img src='demon$rand.png'>";
    }
}

function checkPassword(){
    $pass = $_POST['pass'];
    if(strlen($pass) < 8) echo "Hasło za krótkie.<br>";
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $pass)) echo "Nie możesz mieć znaków specialnych w twoim haśle.<br>";
    if(preg_match_all('/[1234567890]/', $pass, $array) < 2) echo "Hasło ma za mało liczb.<br>";
}


$HIGHEST_CELSIUS_DEGREE = 20;
$table = "<table border='3px solid black'><tr>";
foreach(["Celsius", "Farenheit", "Farenhreit", "Celsius"] as $i) {
    $table .= "<th>$i</th>";
}
$table .= "</tr>";

for($celsius = 0; $celsius < $HIGHEST_CELSIUS_DEGREE; $celsius++) {
    $farenheit = ($celsius * 1.8) + 32;
    $table .= "<tr>";
    foreach([$celsius, $farenheit, $farenheit, $celsius] as $i) {
        $table .= "<td>$i</td>";
    }
    $table .= "</tr>";
}
echo $table;
?>
<?php
$color = "red";
$second = ((int)date('s'));
if ($second > 40) {
    $color = "yellow";
}
else if ($second > 20) {
    $color = "blue";
}

echo "<div style='background-color: $color;width: 300px; height: 300px'></div>"
?>

</html>