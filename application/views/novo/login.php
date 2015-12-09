

<html>
    <head>


        <link rel="stylesheet" href="<?= base_url("css/bootstrap.min.css") ?> ">
        <link rel="stylesheet" href="<?= base_url("css/bootstrap-theme.min.css") ?>" >
         <script src="<?= base_url("js/bootstrap.min.js") ?>" </script>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



            < /head>
                    < body >
                    < div class = "container" >
                    < h1 > Login < /h1>
        <?php
        echo form_open("login");

        echo form_label("Email", "email");
        echo form_input(array(
            "name" => "email",
            "id" => "email",
            "class" => "form-control",
            "maxlength" => "255"
        ));

        echo form_label("Senha", "senha");
        echo form_password(array(
            "name" => "senha",
            "id" => "senha",
            "class" => "form-control",
            "maxlength" => "255"
        ));

        echo form_button(array(
            "class" => "btn btn-primary",
            "content" => "Login",
            "type" => "submit"
        ));


        echo form_close();
        ?>


            < /div>
                    < /body>
                    < /html>