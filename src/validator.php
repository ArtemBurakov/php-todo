<?php
class Validator {

    public function validateText($text) {

        if (preg_match("/^[a-zA-Z0-9 ,.]*$/", $text)) {
            return true;
        }
        else {
            return false;
        }
    }
}
?>
