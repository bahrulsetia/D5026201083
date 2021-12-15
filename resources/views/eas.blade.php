<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>
<body>
<h4 style="margin-left: 30px ; padding-top: 10px">Total Pengunjung</h4>
<br>
<div class="card-body">
    <table class="table">
        <tr>
            <th scope="col">Anda pengunjung ke:</th>
            <th scope="col">{{ $pagecounter->total() }}</th>

      </tr>
    </table>
</div>
</body>
</html>