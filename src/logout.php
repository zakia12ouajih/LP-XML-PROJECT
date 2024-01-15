<?php
session_start();
session_destroy();

header("Location: /LP-XML-PROJECT/public/");
exit();