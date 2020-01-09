<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <title>Summary Report</title>
    <style>
        *, ::after, ::before {
            box-sizing: border-box;
        }

        table {
            border-collapse: collapse;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, .05)
        }

        .table-bordered {
            border: 1px solid #dee2e6
        }

        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6
        }

        .table-bordered thead td, .table-bordered thead th {
            border-bottom-width: 2px
        }

        .table-sm td, .table-sm th {
            padding: .3rem
        }
        .small {
            font-size: 11px;}
    </style>
</head>
<body>
<table class="table table-striped table-bordered table-sm small">
    <thead>
    <tr>
        <th>Name</th>
        <th>Street Address</th>
        <th>City</th>
        <th>Postal Code</th>
    </tr>
    </thead>
    @foreach($users as $user)
        <tr>
            <td>
                {{$user->full_name}}
            </td>
            <td>
                {{$user->street_address}}
            </td>

            <td>
                {{$user->city}}
            </td>
            <td>
                {{$user->zip_code}}
            </td>
        </tr>
    @endforeach

</table>
</body>
</html>
