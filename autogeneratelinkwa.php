<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">

                <h1>auto generateLink whatsapp</h1>
                <form name="form_main">
                    <ul>
                        <label for="number">Nomor : </label>
                        <input type="text" name="number" id="number"> <br>
                    </ul>
                    <ul>
                        <label for="message">pesan : </label>
                        <input type="text" name="message" id="message"> <br>
                    </ul>
                    <ul>
                        <p id="end_url"></p>
                        <button class="btn btn-primary" type="button" onclick="generateLink()">Done</button>
                    </ul>
                </form>
            </div>
        </div>
    </div>

    <script src="javascript.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>