<html>
<head>
<title>Forward Condidate</title>
<style type="text/css">
	table{
		border-color:blue;
	}
</style>
</head>
<body>
    @if($data!="")
    <p><?php echo $data['saveContact']['Message'];"<br>" ?> </br></p>
    <table border="1px" style="border-collapse: collapse;width:50%">
        <tr><th colspan="2">Visiter Details</th></tr>
        <tr><th>Name:-</th><th>{{@$data['saveContact']['name']}}</th></tr>
        <tr><th>Email:-</th><th>{{@$data['saveContact']['Email']}}</th></tr>
        <tr><th>Phone:-</th><th>{{@$data['saveContact']['Phone']}}</th></tr>
    </table>
    @endif
</body>
</html>