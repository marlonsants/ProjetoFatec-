

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Driver de exportação<</title>
<link rel="stylesheet" href='../webroot/css/bootstrap.min.css'>
<link rel="stylesheet" href='../webroot/css/style.css'>
    <script src='../webroot/js/jquery-2.1.1.min.js'></script>
    <script src='../webroot/js/bootstrap.min.js'></script>
     <script src='../webroot/js/script.js'></script>
</head>

<body>
    <div class="container">
        <div class="header">
            
        </div><!-- header -->
        <h1 class="main_title">Driver de exportação</h1>
        <div class="content">
            <fieldset class="field_container align_right">
               
                <span class="import" onclick="show_popup('popup_upload')">Exportar csv para o mysqlL</span>
              
           
        </div><!-- content -->
        
    </div><!-- container -->

    <!-- The popup for upload a csv file -->
    <div id="popup_upload">
        <div class="form_upload">
            <span class="close" onclick="close_popup('popup_upload')">x</span>
            <h2>Upload CSV file</h2>
            <form action="../model/import.php" method="post" enctype="multipart/form-data">
                <input type="file" name="csv_file" id="csv_file" class="file_input">
                <input type="submit" value="Upload file" id="upload_btn">
            </form>
        </div>
    </div>
</body>
</html>
