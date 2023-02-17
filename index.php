<html>
    <body>
        <?php
            //	Write a  PHP Script to Calculate Table of Entered Number (2*2=4) format  Using Self Processing Form
            
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $a = $_POST['a'];
            $b = $_POST['b'];
            
            $c = $a * $b;
            echo "$a X $b = " .$c;
            
        }
    ?>
    <table>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <tr>
            <td>
                enter numbers to multiply
            </td>
            <td>
                <input type="text" name="a">
                <br>
                <input type="text"name = "b">
                <br>
                <input type="submit" value="OK">
            </td>
        </tr>
        </form>
    </table>
    </body>
</html>

