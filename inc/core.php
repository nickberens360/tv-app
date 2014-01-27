<?php
    function curPageName() {
        return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    }
    function curShortURL() {
        return substr(curPageName(), 0, strpos(curPageName(), "."));
    }

    function displayError($errorMsg) {   
        if ($errorMsg!="") { 
            echo '
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    '.$errorMsg.'
                </div>
            ';
        }
    }

    function displaySuccess($successMsg) {
    	if ($successMsg!="") {
            echo '
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    '.$successMsg.'
                </div>
            ';
        }
    }
?>