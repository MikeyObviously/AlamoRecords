<html>
<head>
<style>

img{
float:right;
}

body{
font-family:arial, sans-serif;
font-size:14px;
}

#wrapper{
max-width:800px;
margin:30px auto;
}

.head{
font-size:32px;
}

.small{
font-size:80%;
}

input{

}

#process{
font-size:58px;
margin-top:20px;
}

</style>
</head>

<body>
<div id="wrapper">

<img src="excel.png" />

<h1 class="head">Specpage Generator v 0.1</h1>

<p>Select an Excel 2003* file from your computer and click Process.  A ZIP file containing the specpages will automatically start downloading.</p>

<p class="small"><i>*Please note: An Excel 2003 file is necessary, and not the default format Excel 2007 saves in.  When saving your spreadsheet, select "Save As..", and choose the Excel 2003 format (.XLS)</i></p>

<p>The data to be read should all be on the first worksheet, and in the first 3 columns with no headers.  The three columns in order:</p>
<ol>
<li>Item # (required)</li>
<li>Description (tab 1)</li>
<li>Features (tab 2)</li>
</ol>
<p>&nbsp; 
<p><form action="script.php" method="post"
enctype="multipart/form-data">

<label for="file"><b>Select File:</b></label>
<input type="file" name="file" id="file" value="Browse..." /> 
<br />
<input id="process" type="submit" name="submit" value="Process" />
</form>

</div>
</body>
</html>