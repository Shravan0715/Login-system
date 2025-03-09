<?php
session_start();
include("config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            ?>
            <div class="auth-message auth-success">
                <div class="message-highlight">Login Successful!</div>
                <p>Welcome back to your account.</p>
                <a href="pages/dashboard.php" class="return-link">Proceed to Dashboard →</a>
            </div>
            <?php
            header("Location: pages/dashboard.php");
            exit();
        } else {
            ?>
            <div class="auth-message auth-error">
                <div class="message-highlight">Incorrect Password</div>
                <p>Please check your credentials and try again.</p>
                <a href="index.php" class="return-link">← Back to Login</a>
            </div>
            <?php
        }
    } else {
        ?>
        <div class="auth-message auth-error">
            <div class="message-highlight">User Not Found</div>
            <p>No account exists with this email address.</p>
            <a href="register.php" class="return-link">Create an Account →</a>
        </div>
        <?php
    }
    $stmt->close();
}
?>
<link rel="stylesheet" href="css/styles.css">