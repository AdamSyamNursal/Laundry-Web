<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        $username = $_POST["login-username"];
        $password = $_POST["login-password"];
        $role = $_POST["role"];

        $host = "localhost";
        $dbname = "infinitylaundry";
        $db_user = "root";
        $db_password = "";

        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname", $db_user, $db_password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("SELECT * FROM user WHERE username = :username");
            $stmt->bindParam(":username", $username);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    if ($user['role'] === $role) {
                        session_start();
                        $_SESSION['user_id'] = $user['id'];
                        $_SESSION['role'] = $role; 
                        header("Location: ../" . $role . "s/dashboard.php"); 
                        exit;
                    } else {
                        header("Location: ../index.php?alert=Login%20failed.%20Incorrect%20role.");
                        exit;
                    }
                } else {
                    header("Location: ../index.php?alert=Login%20failed.%20Incorrect%20password.");
                    exit;
                }
            } else {
                header("Location: ../index.php?alert=Login%20failed.%20User%20not%20found.");
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
