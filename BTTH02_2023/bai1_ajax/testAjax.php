<?php
include_once("db_connect.php");

if (!empty($_POST["name"]) && !empty($_POST["comment"])) {
    try {
        // Tăng giá trị commentID
        $commentIdQuery = "SELECT MAX(commentID) + 1 AS newCommentId FROM comment";
        $commentIdResult = $conn->query($commentIdQuery);
        $newCommentId = $commentIdResult->fetch(PDO::FETCH_ASSOC)['newCommentId'];

        // Thực hiện INSERT với giá trị mới của commentID
        $insertComments = "INSERT INTO comment (commentID, parent_id, comment, sender) VALUES (:commentId, :parent_id, :comment, :sender)";
        $stmt = $conn->prepare($insertComments);

        // Bind parameters
        $stmt->bindParam(':commentId', $newCommentId, PDO::PARAM_INT);
        $stmt->bindParam(':parent_id', $_POST["commentId"], PDO::PARAM_INT);
        $stmt->bindParam(':comment', $_POST["comment"], PDO::PARAM_STR);
        $stmt->bindParam(':sender', $_POST["name"], PDO::PARAM_STR);

        // Execute the query
        $stmt->execute();

        $message = '<label class="text-success">Comment posted Successfully.</label>';
        $status = array(
            'error'  => 0,
            'message' => $message
        );
    } catch (PDOException $e) {
        $message = '<label class="text-danger">Error: Comment not posted.</label>';
        $status = array(
            'error'  => 1,
            'message' => $message
        );
    }
} else {
    $message = '<label class="text-danger">Error: Comment not posted.</label>';
    $status = array(
        'error'  => 1,
        'message' => $message
    );
}

echo json_encode($status);
?>
