<?php
include('connexions2.php');

// Setting the $_SESSION['connected_user'] to NULL (= disconnect from previous user)
$_SESSION['connected_id'] = NULL;

$isConnected = false;
$connectionForm = isset($_POST['email']);
if ($connectionForm) {
    $emailToCheck = $_POST['email'];
    $passwordToCheck = $_POST['password'];

    $emailToCheckr = $mysqli->real_escape_string($emailToCheck);
    $passwordToCheck = $mysqli->real_escape_string($passwordToCheck);

    // sha256 hash for password safety
    $passwordToCheck = hash('sha256', $passwordToCheck);
    $connectionRequest = "SELECT name as user_name, password as user_password, ID as user_id FROM users WHERE email LIKE '$emailToCheck' ";

    // Checking fo an email/password match in DB
    $res = $mysqli->query($connectionRequest);
    $user = $res->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social network</title>
</head>

<body>
    <main>
        <article >
            <h1 >Welcome</h1>

            <h2 class="text-2xl">Connexion</h2>

            <form action="index.php" method="post">
                <dl>
                    <dt><label for='email'>E-mail</label></dt>
                    <dd><input type='email' name='email'></dd>

                    <dt><label for='motpasse'>Password</label></dt>
                    <dd><input type='password' name='password'></dd>
                </dl>
                <input type='submit'
                    value="Log in" <?php if ($isConnected) {
                        ?> href="feed.php" <?php
                    } ?>>
            </form>
            <p>
                Not a member yet?
                <a href='registration.php'>Create an
                    account!</a>
            </p>
            <?php if ($connectionForm) {
                if (!$user or $user["user_password"] != $passwordToCheck) { ?>
                    <p>
                        <?php echo "Wrong ID or password, try again."; ?>
                    </p>
                <?php
                } else { ?>
                    <p>
                        <?php echo "Welcome back, " . $user['user_name'] . "!"; ?>
                    </p>
                    <?php
                    $isConnected = true;
                    $_SESSION['connected_id'] = $user['user_id'];
                    header('Location: feed.php');

                }
            } ?>

        </article>
    </main>
</body>

</html>