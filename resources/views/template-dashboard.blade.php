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
    </style>
  </head>
  <body>
    <div class="container">

        <div class="row mb-5">
            <div class="col">
                <h3>Welcome {{ auth()->user()->name }}</h3>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-2">

                <div class="d-grid gap-2">

                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>

                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>

                  </div>

            </div>
            <div class="col-md-10">

                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    <div class="card mb-5" id="card-tweet">
                        <div class="card-body">
                            <textarea class="form-control" name="content"></textarea>
                        </div>
                        <div class="card-footer">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Tweet</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="card">
                    <div class="card-body">

                        <table class="table">
                            <tbody>
                                @foreach($senaraiPost as $post)
                                <tr>
                                    <td>
                                        {{ $post->content }}
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-info">Edit</a>
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

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
