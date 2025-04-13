<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["register"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["role"];

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $host = "localhost";
        $dbname = "infinitylaundry";
        $db_user = "root";
        $db_password = "";

        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname", $db_user, $db_password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("INSERT INTO user (name, email, username, password, role) VALUES (:name, :email, :username, :password, :role)");
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $hashed_password);
            $stmt->bindParam(":role", $role);

            if ($stmt->execute()) {
                header("Location: ../index.php?alert=Registration%20successful!");
                exit;
            } else {
                header("Location: ../index.php?alert=Registration%20failed!");
                exit;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
