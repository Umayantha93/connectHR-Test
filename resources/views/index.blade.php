<!DOCTYPE html>
<html>
<head>
    <style>
        div.center {
            position: absolute;
            left: 0;
            line-height: 20px;
            text-align: center;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
        }

        table {
            margin: 0 auto; 
        }
    </style>
</head>
<body>
<div class="center">
    <h1>Companies and Locations Count</h1>
    <table>
        <thead>
            <tr>
                <th>Company Name</th>
                <th>Location Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->locations_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
