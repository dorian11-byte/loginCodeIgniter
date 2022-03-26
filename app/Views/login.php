<html>
 <head>
    <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css">
    <script src="http://cdn.webix.com/edge/webix.js"></script>
 </head>
 <body>
   <script type="text/javascript" charset="utf-8">

    webix.ui({
        view:"form", 
        id:"log_form",
        width:300,
        elements: [
            { view: "text", label: "Username", name: "username" },
            { view: "text", label: "Password", name: "password", type: "password" },
            { view: "button", value: "Submit", width: 150, align: "center", click: submit }
        ]
    });
    function submit(){
        var values = $$("myform").getValues().username;
        console.log(values);
    }

   </script>
 </body>
</html>