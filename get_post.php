<?php
    //GET sends the data as part of the URL
    //appends form-data into the URL in name/value pairs.
    //never use GET method if you have password or other sensitive informationto be send to the server.
    // useful for form submissions where a user want to bookmark the result
    //GET is better for non-secure data, like query string in Google
    //GET can't be used to send binary data, ex: images or word documents.

    // <form action="tausif.php" method="GET">
    /* if we use an invalid value for the method attribute of the<forn> tag, the 
        browser will use the default value GET. */
    
        //POST
    //HTTP POST requests supply additional data from the client(browser) to the
    //server in the message body
    //appends form-data inside the body of the HTTP request (data is not shown in URL)
    //POST is a little safer than GET because the parameters are not storedin the 
    //browser history or in web server logs.
    


?>