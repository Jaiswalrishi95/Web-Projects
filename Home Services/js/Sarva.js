gapi.auth.checkSessionState({session_state: null}, function(isUserNotLoggedIn){
    if (isUserNotLoggedIn) {
    	document.body.style.backgroundColor = "red";
    // do some stuff
    }
});