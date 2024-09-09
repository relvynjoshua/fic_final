<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
            margin: 0 auto;
            background-color: white;
            max-width: 800px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .form-header {
            background-color: #f58220;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 8px 8px 0 0;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            font-size: 16px;
        }
        .value {
            display: inline-block;
            margin-top: 5px;
            font-size: 14px;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
        }
        table, th, td {
            border: 1px solid #dddddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        td {
            background-color: #fcfcfc;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-header">
            <h1>ACCOMPLISHMENT REPORT</h1>
        </div>

        <div class="form-group">
            <label>Strategic Performance Management System:</label>
            <span class="value">{{ $accomplishment_type }}</span>
        </div>

        <table>
            <tr>
                <th>Period</th>
                <th>Others</th>
            </tr>
            <tr>
                <td>{{ $period }}</td>
                <td>{{ $acc_others }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
