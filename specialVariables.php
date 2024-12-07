<?php 
    // $_GET, $_POST = special variables used to collect data from an HTML
    
    // form data is sent to the file in the action attribute of <form>

    //Differences 
    // *********$_GET **********
    // Data is appended to the url
    // Not secure
    // char limit 
    // Bookmark is possible 
    // Get requests can be cached
    // Better for a search page

    // **************$_POST***********
    // data is packaged inside the body of the HTTP request 
    //    more secure
    //    no data limit
    //    cannot bookmark
    //    GET request are not cached
    //    better for submitting credentials

?>