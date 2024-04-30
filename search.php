<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
</head>
<body style="background-color: orange;"> 
<a href="home.html">&larr; Back to home</a>

<?php
if(isset($_GET['query'])) {
    $searchTerm = $connection->real_escape_string($_GET['query']);

    $queries = [
        'failed_jobs' => "SELECT id, connection, queue, payload, exception, failed_at 
                          FROM failed_jobs 
                          WHERE id LIKE '%$searchTerm%' 
                          OR connection LIKE '%$searchTerm%' 
                          OR queue LIKE '%$searchTerm%' 
                          OR payload LIKE '%$searchTerm%' 
                          OR exception LIKE '%$searchTerm%' 
                          OR failed_at LIKE '%$searchTerm%'",
        'loan_applications' => "SELECT id, description, amount, status, pay_status, date, user_id, st_id 
                                FROM loan_applications 
                                WHERE id LIKE '%$searchTerm%' 
                                OR description LIKE '%$searchTerm%' 
                                OR amount LIKE '%$searchTerm%' 
                                OR status LIKE '%$searchTerm%' 
                                OR pay_status LIKE '%$searchTerm%' 
                                OR date LIKE '%$searchTerm%' 
                                OR user_id LIKE '%$searchTerm%' 
                                OR st_id LIKE '%$searchTerm%'",
        'loan_payments' => "SELECT p_id, loan_id, payment_date, payment_amount, user_id 
                            FROM loan_payments 
                            WHERE p_id LIKE '%$searchTerm%' 
                            OR loan_id LIKE '%$searchTerm%' 
                            OR payment_date LIKE '%$searchTerm%' 
                            OR payment_amount LIKE '%$searchTerm%' 
                            OR user_id LIKE '%$searchTerm%'",
        'migrations' => "SELECT id, migration, batch 
                         FROM migrations 
                         WHERE id LIKE '%$searchTerm%' 
                         OR migration LIKE '%$searchTerm%' 
                         OR batch LIKE '%$searchTerm%'",
        'password_resets' => "SELECT email, token, created_at 
                              FROM password_resets 
                              WHERE email LIKE '%$searchTerm%' 
                              OR token LIKE '%$searchTerm%' 
                              OR created_at LIKE '%$searchTerm%'",
        'statuses' => "SELECT id, name, created_at, updated_at 
                       FROM statuses 
                       WHERE id LIKE '%$searchTerm%' 
                       OR name LIKE '%$searchTerm%' 
                       OR created_at LIKE '%$searchTerm%' 
                       OR updated_at LIKE '%$searchTerm%'",
        'students' => "SELECT name, reg_id, email, class 
                       FROM students 
                       WHERE name LIKE '%$searchTerm%' 
                       OR reg_id LIKE '%$searchTerm%' 
                       OR email LIKE '%$searchTerm%' 
                       OR class LIKE '%$searchTerm%'",
        'user' => "SELECT user_id, firstname, lastname, email, password, telephone, role 
                   FROM user 
                   WHERE user_id LIKE '%$searchTerm%' 
                   OR firstname LIKE '%$searchTerm%' 
                   OR lastname LIKE '%$searchTerm%' 
                   OR email LIKE '%$searchTerm%' 
                   OR password LIKE '%$searchTerm%' 
                   OR telephone LIKE '%$searchTerm%' 
                   OR role LIKE '%$searchTerm%'",
    ];

    echo "<h2><u>Search Results:</u></h2>";
    foreach ($queries as $table => $sql) {
        $result = $connection->query($sql);
        echo "<h3>Table: " . ucfirst($table) . "</h3>"; 

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p>";
                foreach ($row as $key => $value) {
                    echo "<strong>$key</strong>: $value ";
                }
                echo "</p>";
            }
        } else {
            echo "<p>No results found in $table matching the search term: '$searchTerm'</p>";
        }
    }

    $connection->close();
} else {
    echo "<p>No search term was provided.</p>";
}
?>

</body>
</html>
