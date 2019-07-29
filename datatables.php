<!DOCTYPE html>
<html>
<head>
   <title>Tutorial PHP Datatables Dengan PHP Dan MySQL</title>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>
 
<table id="tabel-data">
    <thead>
        <tr>
            <th>Number</th>
            <th>Full Name</th>
            <th>Issue Title</th>
            <th>Issue Category</th>
			<th>Issue Area</th>
			<th>Issue Funcloc</th>
			<th>Issue Description</th>
			<th>PIC</th>
			<th>Upload Date</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include 'koneksi.php';
        $upload = mysqli_query($koneksi,"select * from imageupload");
        while($row = mysqli_fetch_array($upload))
        {
            echo "<tr>
            <td>".$row['uid']."</td>
            <td>".$row['full_name']."</td>
            <td>".$row['image_name']."</td>
            <td>".$row['param_issue']."</td>
			<td>".$row['param_building']."</td>
			<td>".$row['param_funcloc']."</td>
			<td>".$row['param_desc']."</td>
			<td>".$row['param_pic']."</td>
			<td>".$row['date']."</td>
        </tr>";
        }
    ?>
    </tbody>
 
    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
 
</table>
</body>
</html>