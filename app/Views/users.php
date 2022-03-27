<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css">
    <script src="http://cdn.webix.com/edge/webix.js" type="text/javascript"></script>
    <title>Document Title</title>
</head>
<body>
    <script type="text/javascript" charset="utf-8">

        webix.ready(function(){
            webix.ui({
                view: "form",
                id: "log_form",
                width: 300,
                elements:[
                    {view:"text", name:"email", label:"Email"},
                    {view:"text", name:"password", type:"password", label:"Password"},
                    {margin:5, cols:[
                        {view:"button", click:"testLogin", value:"login"}
                    ]}
                    ]
                });
            });
        
        function testLogin()
        {
            var suplyemail = $$('log_form').getValues().email;
            var suplypass = $$('log_form').getValues().password;
            console.info(suplyemail);
            console.info(suplypass);
        }

        <?php
            
        ?>
        console.log(<?php echo json_encode($user); ?>);

    </script>

    
</body>
</html>