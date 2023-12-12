<?php
    // function getCommentReply($conn, $parent_id) {
    //     $commentQuery = "SELECT id, parent_id, comment, sender, date FROM comment WHERE parent_id = :parent_id ORDER BY id DESC";
    //     $stmt = $conn->prepare($commentQuery);
    //     $stmt->bindParam(':parent_id', $parent_id, PDO::PARAM_INT);
    //     $stmt->execute();
        
    //     $commentHTML = '';
    
    //     if ($stmt->rowCount() > 0) {
    //         while ($comment = $stmt->fetch()) {
    //             $commentHTML .= '
    //                 <div class="panel panel-primary">
    //                 <div class="panel-heading">By <b>'.$comment["sender"].'</b> on <i>'.$comment["date"].'</i></div>
    //                 <div class="panel-body">'.$comment["comment"].'</div>
    //                 <div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$comment["id"].'">Reply</button></div>
    //                 </div>';
    //             $commentHTML .= getCommentReply($conn, $comment["id"]);
    //         }
    //     }
    
    //     return $commentHTML;
    // }
    include_once("db_connect.php");
    $commentQuery = "SELECT id, parent_id, comment, sender, date FROM comment WHERE parent_id = '0' ORDER BY id DESC";
    $stmt = $conn->prepare($commentQuery);
    $stmt->execute();
    $rows = $stmt->fetchAll();
    $commentHTML = '';
    foreach($rows as $row){
        $commentHTML .= '
                <div class="panel panel-primary">
                <div class="panel-heading">By <b>'.$row["sender"].'</b> on <i>'.$row["date"].'</i></div>
                <div class="panel-body">'.$row["comment"].'</div>
                <div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$row["id"].'">Reply</button></div>
                </div> ';
            // $commentHTML .= getCommentReply($conn, $comment["id"]);
    }
        echo $commentHTML;

?>
