<?php

// get the feedback (they are arrays, to make multiple positive/negative messages possible)
$feedback_positive = Session::get('feedback_positive');
$feedback_negative = Session::get('feedback_negative');

// echo out positive messages
if (isset($feedback_positive)) {
    echo '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    foreach ($feedback_positive as $feedback) {
        echo $feedback. '<br>';
    }
    echo '</div>';
}

// echo out negative messages
if (isset($feedback_negative)) {
    echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    foreach ($feedback_negative as $feedback) {
        echo $feedback. '<br>';
    }
    echo '</div>';
}



  