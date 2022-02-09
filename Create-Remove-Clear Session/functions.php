<?php

// Don't forget you should define session_start(); before usage.
session_start();

function createSession($key, $value){

    if(!empty($key) && !empty($value)){
        $_SESSION[$key] = $value;
    }

}

function removeSession($key){

    if(!empty($key)){

        if(isset($_SESSION[$key])){

            unset($_SESSION[$key]);
    
        }

    }

}

function clearSessions(){

    session_destroy();

}

/*

    Example Usages:

    createSession('name', 'value');// Create session with key 'name' and value 'value'.
    removeSession('name');// Remove session with key 'name'.
    clearSessions();// Clear all sessions.

    
**
session_start();
**

Example Session Creation:
createSession('sessionName', 'SessionValue');

//////////////////////////////////////////////////////////////

Example Session Deletion:
removeSession('sessionName');

//////////////////////////////////////////////////////////////

Clear All Sessions:
clearSessions();


*/

// createSession('sessionName', 'SessionValue');
// removeSession('test');
// clearSessions();

?>