<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilemiyorum Altan</title>
    <script type="application/javascript">

  function isNumberKey(evt)
      {
          let charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
      }
</script>
</head>
<style type="text/css">
    .link { color: #eaedff; } /* CSS link color (red) */
    .link:hover { color: #0b2e13; } /* CSS link hover (green) */
    a {
        text-decoration: none;
        color: lime;
        float: right;
        -webkit-transition: color 1s;
        -moz-transition:    color 1s;
        -ms-transition:     color 1s;
        -o-transition:      color 1s;
        transition:         color 1s;
    }
.kolon {
  border: 2px outset yellow;
  background-color: lightblue;
    vertical-align: middle;
    horiz-align: center;
    width: 100%;
    height: 70px;
    font-family: Serif, serif;

}
.header1 {
  border: 5px outset yellow;
  background-color: white;
  text-align: center;
    display:inline-block;
    padding: 10px;
  width: 30%;
}
.table, th, td {
    border: 6px solid #d35b5b;
    background-color: lightblue;
    text-align: center;

    width: 22%;
    }
.arkaplan { background-color: lightgrey;}
</style>
<body class="arkaplan">
<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";

// Creating a connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Creating a database named mydb
$sql = "CREATE DATABASE mydb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully with the name newDB";
} else {
    echo "Error creating database: " . $conn->error;
}
// closing connection
$conn->close();
?> -->
<div class="kolon" align="middle">
   <a href="logout.php" class="link"> Çıkış Yap  </a>
</div>

<div class="header1">
  <h2> Cihan QsQn ile Php</h2>
  <p>
        <?php
        echo 'hello world' ;
        if(isset($_POST['gonder']))
        {
        $s1 = $_POST['sayi1'];
        $s2 = $_POST['sayi2'];
        $toplam =   $s1+$s2;
        $fark =   $s1-$s2;
        $carp =   $s1*$s2;
        $bol =   $s1/$s2;
        }
        else 
        {
        $toplam = 0;
        $fark = 0;
        $bol = 0;
        $carp =0; 
        }
        ?>
    <p>
    <table class="table"  >
    <tr> 
    <th> Toplam </th>     <th> Fark   </th>    <th> çarpım   </th>    <th> bölüm    </th>      
    </tr>
    <tr> 
        <th>   <?php echo  $GLOBALS['toplam']   ?> </th>
        <th>   <?php echo  $GLOBALS['fark']    ?>  </th>
        <th>   <?php echo  $GLOBALS['carp']    ?>  </th>
        <th>   <?php echo  $GLOBALS['bol']   ?>    </th>      
    </tr>
    </table>
</div>

<div class='header1'>
    <p>
    <form method="post" action=" <?=$_SERVER["PHP_SELF"]?>">
        <label>
            <input type="text" name="sayi1" value="" onfocus="this.value=''" onkeypress="return isNumberKey(event)" maxlength="10">
        </label><br>
        <label>
            <input type="text" name="sayi2" value="" onfocus="this.value=''" onkeypress="return isNumberKey(event)" maxlength="10">
        </label><br>
    <button type="submit" name='gonder'>Hesapla</button>
    </form>
</div>
</body>
</html>