<?php
$conn = mysqli_connect("localhost","root","","csit");
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

if (isset($_POST["import"]))
{
    
    
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                
                   $regno = "";
                if(isset($Row[1])) {
                    $regno = mysqli_real_escape_string($conn,$Row[1]);
                }
                   $ar = "";
                if(isset($Row[5])) {
                    $ar = mysqli_real_escape_string($conn,$Row[5]);
                }
                
              
                
                
                
    $query = "update fees set arrears='$ar',payablebdd=monfee+tfee+admfee+'$arr',payableadd=monfee+tfee+fine+admfee+'$arr',balamt=monfee+tfee+fine+admfee+'$arr' where regno='$regno'";
                    $result = mysqli_query($conn, $query);
                    
                    
                    
                    
                   
                    
  
                
                

                
                    if (! empty($result)) {
                        $type = "success";
                  
                        $message = "Arrears Inserted  Successfull";
                    } else {
                        $type = "error";
                        echo("Error description: " .$query2."<br>" .$conn -> error);
                    }
                
             }
        
         }
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>

<!DOCTYPE html>
<html>    
<head>
<style>    
body {
	font-family: Arial;
	width: 550px;
}

.outer-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 40px 20px;
	border-radius: 2px;
}

.btn-submit {
	background: #333;
	border: #1d1d1d 1px solid;
    border-radius: 2px;
	color: #f0f0f0;
	cursor: pointer;
    padding: 5px 20px;
    font-size:0.9em;
}

.tutorial-table {
    margin-top: 40px;
    font-size: 0.8em;
	border-collapse: collapse;
	width: 100%;
}

.tutorial-table th {
    background: #f0f0f0;
    border-bottom: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

.tutorial-table td {
    background: #FFF;
	border-bottom: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

#response {
    padding: 10px;
    margin-top: 10px;
    border-radius: 2px;
    display:none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
.blinking{
    animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     color: green;    }
    49%{    color: red; }
    60%{    color: green; }
    99%{    color:red;  }
    100%{   color: red;    }
}
</style>
</head>

<body>
    <h2>Import Fees Excel File</h2>
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
        
            </div>
        
        </form>
        <hr>
        <a style='color:green' href='uploads/balancesheeet.xlsx'><span class="blinking">Download Sample Excel(Balance Sheet)</span></a>
        <hr>
                <a href='index.php'>Back to Main</a>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         

</body>
</html>