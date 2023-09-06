<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Client</title>
</head>
<body>
    
    <div class="container">

        <h1 class="text-center text-danger">My PHP form</h1>

        <div class="card">
            <div class="card-body">
                <form action="server.php" method="POST">
                    <div class="mb-3">
                        <label class="text-center">Paragraph</label>
                        <input type="text" class="form-control m-auto" name="paragraph">
                    </div>
                    <div class="mb-3">
                        <label class="text-center">Censorship</label>
                        <input type="text" class="form-control m-auto" name="censorship">
                    </div>
                    <button class="btn btn-danger" type="submit">Invia</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>