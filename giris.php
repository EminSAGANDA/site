<?php include("baglan.php"); ?>
<html>
<body>
<form action="" method="POST">
                            <input type="text" name="email" placeholder="Enter your email address...">
                            <input type="password" name="password" placeholder="Password">
                            <div class="form-button">
                                <button id="submit" type="submit" >Login</button>
                            </div>

                            </body>
                            </html>
                            <?php include("baglan.php"); ?>
<?php
if($_POST){
    $sql = "select * from kullanicilar where email='$_POST[email]' and password='$_POST[password]'";
    $sorgu = mysqli_query($baglanti, $sql);
    if (mysqli_num_rows($sorgu) >= 1) {
        header("Location:index.php");
    }
    else{
        echo "kullanıcı bilgileri eşleşmedi";
    }
}
?>