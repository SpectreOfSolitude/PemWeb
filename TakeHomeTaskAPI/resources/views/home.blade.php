<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API Creation</title>
</head>
<body>
    <main>
        <h1>
            Julukan-julukan teman teman CS
        </h1>
        <table>
            @foreach ($data['data'] as $datum)
                <tr>
                    <td>
                        {{$datum['nama']}}
                    </td>
                    <td>
                        ||
                    </td>
                    <td>
                        {{$datum['julukan']}}
                    </td>
                </tr>
            @endforeach
        </table>
    </main>
</body>
</html>