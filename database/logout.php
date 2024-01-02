<?php
    session_start();

    // remove all sessions variables
    session_unset();

    // destroy the session
    session_destroy();


?>