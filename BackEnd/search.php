<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $word = trim($_POST["word"]);

    $stmt = $conn->prepare("SELECT meaning FROM dictionary WHERE word = ?");
    $stmt->bind_param("s", $word);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row["meaning"];
    } else {
        echo "Word not found in dictionary.";
    }
}
?>
