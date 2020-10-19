    <?php   
        //Header & Function File
        require_once("header.php");
        require_once("functions.php"); 


        #Main Content Area Start
        BR();
        Heading("Welcome to PHPDocs");
        Para("This example will divide header, menus, footer into separate files");
        #Main content Area End

        //Footer File
        require_once("footer.php"); 
        
        ?>

