<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
        
      
        <title>Laravel 4 Chat</title>
        <link rel="stylesheet" type="text/css" media="screen" href="converse/css/converse.min.css">
<script src="converse/builds/converse.min.js"></script>
    </head>
    <body>
<script type="text/javascript">
	
require(['converse'], function (converse) {
converse.initialize({
    bosh_service_url: 'http://127.0.0.1:7070/http-bind/',
    keepalive: false,
    jid: 'crispoli@sofidcom',
    authentication: 'prebind',
   
    allow_logout: false,
    i18n: locales['es']

});
});
</script>

    </body>
</html>