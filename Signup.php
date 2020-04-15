        <?php
            if(isset($_POST['submit'])){
                if(empty($_POST['username']) or empty($_POST['password'])){
                    echo '<p style="color: red">Vui lòng không để trống </p> ';
                }
            }
        ?>