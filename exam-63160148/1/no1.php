<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
        กรุณากรอกแม่สูตรคูณ 
        <input type="text" name="num"> 
        <input type="text" name="round">
        <input type="submit" value="ตกลง">
    </form>
    <?php
        isset( $_POST['num'] ) ? $num = $_POST['num'] : $num = "";
        if( !empty( $num ) ) {
            echo "<hr/>";
            echo "<b>สูตรคูณแม่ {$num}</b><br/><br/>";
            for( $i=1; $i<=$round; $i++ ) {
                echo "{$num} x {$i} = ".($num*$i)."<br/>";
            }
            return sum;
            }
          
            }
        }
    ?>
</body>
</html>