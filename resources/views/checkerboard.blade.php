<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mydesign/mystyle.css">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="board-wrapper">
        <button onclick="gantiWarna()">Ganti Warna</button>
        <h1>{{ $pagetitle }}</h1>

        <table class="checkerboard">
            @for ($row = 1; $row <= $size; $row++)
                <tr>
                    @for ($col = 1; $col <= $size; $col++)
                        @if (($row + $col) % 2 == 0)
                            <td class="cell-white">{{ $row }},{{ $col }}</td>
                        @else
                            <td class="cell-black">{{ $row }},{{ $col }}</td>
                        @endif
                    @endfor
                </tr>
            @endfor
        </table>
    </div>

    <script>
        function gantiWarna() {
            let bidakHitam = document.getElementsByClassName('cell-black');
            let bidakHitamArray = Array.from(bidakHitam)
            bidakHitamArray.forEach(element => {
                element.classList.remove('cell-black');
                element.classList.add('cell-red');
            });
        }
    </script>
</body>
</html>