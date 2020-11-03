<!DOCTYPE html>
<html>
<body>
<?PHP
    session_start();
        id(isset($_SESSION['views'])) {
            $_SESSION['views']=$_SESSION['views']+1;
        }else
            $_SESSION['views']=1;
        }
        echo "you've visited the page views=".$SESSION['views'];
?>
</body>
<html>