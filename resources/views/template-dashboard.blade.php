<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin-top: 100px;
        }
        #card-tweet {
            max-width: 600px;
        }
    </style>
  </head>
  <body>
    <div class="container">

        <div class="row mb-5">
            <div class="col">
                <h3>Dashboard</h3>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-4"></div>
            <div class="col-md-8">

                <div class="card" id="card-tweet">
                    <div class="card-body">
                        <textarea class="form-control" name="content"></textarea>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Tweet</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-4"></div>
            <div class="col-md-8">

                <div class="card">
                    <div class="card-body">

                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        Sample tweet Sample tweet Sample tweet
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-info">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
