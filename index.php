<!DOCTYPE html>
<html>
    <body>
        <b>Bilangan Prima</b>
        <br>
        ==============================
        <br>
        <form action="#" method="post">
            Input: <input type="text" name="input_text"/>
            <input type="submit" name="submit_form"/>
            <br><br>
            Output: <br>
            <?php
                if(isset($_POST['submit_form'])){
                    $input = $_POST['input_text'];


                    for($i = 1; $i <= $input; $i++){
    $belakang = $input - ($i-1);
    for($j = 1; $j <= $input; $j++){
        if($j == $i || $j == $belakang){
            echo '*';
        }else{
            echo '-';
        }   
        
    }
    echo '<br>';
  }


                }
            ?>
        </form>
    </body>
</html>