<?php
session_start();
require_once '../config/database.php';

// Initialize messages
$error = '';
$success = '';

// Check if form submitted
if (isset($_POST['register'])) {

    // Get and sanitize input
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validation
    if (empty($email) || empty($password) || empty($confirm_password)) {
        $error = "All fields are required!";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format!";
    }
    elseif ($password !== $confirm_password) {
        $error = "Passwords do not match!";
    }
    elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters!";
    }
    else {

        try {

            // Check if email already exists
            $stmt = $pdo->prepare("SELECT user_id FROM users WHERE email = ?");
            $stmt->execute([$email]);

            if ($stmt->fetch()) {

                $error = "Email already registered!";

            } else {

                // Hash password
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Default role_id = 1 (patient)
                $stmt = $pdo->prepare("
                    INSERT INTO users (email, password, role_id)
                    VALUES (?, ?, ?)
                ");

                $stmt->execute([$email, $hashed_password, 1]);

                $success = "Registration successful! You can now login.";

                // Optional redirect
                // header("Location: login.php");
                // exit();
            }

        } catch (PDOException $e) {

            // Don't expose database errors in production
            $error = "Something went wrong. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Hospital System</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #0056b3;
        }

        .error {
            color: red;
            margin-bottom: 15px;
            padding: 10px;
            background: #ffe6e6;
            border: 1px solid red;
        }

        .success {
            color: green;
            margin-bottom: 15px;
            padding: 10px;
            background: #e6ffe6;
            border: 1px solid green;
        }

        p {
            text-align: center;
        }

    </style>
</head>

<body>

    <h2>Register New Account</h2>

    <!-- Display error message -->
    <?php if (!empty($error)): ?>
        <div class="error">
            <?php echo htmlspecialchars($error); ?>
        </div>
    <?php endif; ?>

    <!-- Display success message -->
    <?php if (!empty($success)): ?>
        <div class="success">
            <?php echo htmlspecialchars($success); ?>
        </div>
    <?php endif; ?>

    <!-- Registration Form -->
    <form method="POST" action="">

        <label>Email:</label>
        <input
            type="email"
            name="email"
            required
            value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>"
        >

        <label>Password:</label>
        <input
            type="password"
            name="password"
            minlength="6"
            required
        >

        <label>Confirm Password:</label>
        <input
            type="password"
            name="confirm_password"
            minlength="6"
            required
        >

        <button type="submit" name="register">
            Register
        </button>

    </form>

    <p>
        Already have an account?
        <a href="login.php">Login here</a>
    </p>

</body>
</html>