<?php

include "/xampp/htdocs/pro1014_DuAn/sources/Model/DAO/FeedbackDAO.php";

    $id = $_GET['user_id'];
    $product_id = $_GET['product_id'];

    $feedbackDAO = new FeedbackDAO();

    $feedback = $feedbackDAO->removeFeedbackByUserIDAndProductID($id, $product_id);
    if ( $feedback == true){
        echo ('<script>
                    var result = confirm("Removed Success!!");
                    if (result == true){
                        window.location= "http://localhost/pro1014_duan/sources/View/admin/feedbacks.php";}
                    else window.location= "http://localhost/pro1014_duan/sources/View/admin/feedbacks.php";
                </script>');
    } else return false;   
?>