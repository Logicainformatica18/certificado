<!DOCTYPE html>
<html>
<head>
    <title>Google Sheet Data</title>
</head>
<body>
    {{-- <table border="1">
        <thead>
            <tr>
                @if (!empty($data))
                    @foreach (array_keys($data[0]) as $header)
                        <th>{{ $header }}</th>
                    @endforeach
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    @foreach ($row as $cell)
                        <td>{{ $cell }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table> --}}

    @foreach ($object as $datas)
            {{$datas->email}}
    @endforeach




</body>
</html>
