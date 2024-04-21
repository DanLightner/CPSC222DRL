<?php 

$user = 'admin';
$pass = 'password';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $u = preg_replace('/[^a-z]/', '', $_POST['u']);
    $p = preg_replace('/[^a-z]/', '', $_POST['p']);

    if ($user === $u && $pass === $p) {
        $_SESSION['loggedin'] = 1;
        $_SESSION['username'] = $user;
        header('Location: /chap13.php');
    } else {
        echo 'Invalid Login...';
    }
}		

?>
<html>
<body>
<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 1): ?>
    <h1> Hello, <?php echo $_SESSION['username']; ?></h1>
    <a href="chap13logout.php">Logout</a>
<?php else: ?>
    <form method="post" action="chap13.php">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="u"></td>
            </tr>
            <tr> 	
                <td>Password:</td>
                <td><input type="password" name="p"></td>
            </tr>
        </table>
        <input type="submit" value="Login">
    </form>
<?php endif; ?>
</body>
</html>
