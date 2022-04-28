<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('dist/dist/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/dist/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/dist/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/dist/_all-skins.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/dist/style.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">

    <script src="{{ asset('dist/dist/demo.js') }}"> </script>
    <script src="{{ asset('dist/dist/jquery.min.js') }}"> </script>
    <script src="{{ asset('dist/dist/bootstrap.min.js') }}"> </script>
    <script src="{{ asset('dist/dist/fastclick.js') }}"> </script>
    <script src="{{ asset('dist/dist/jquery.slimscroll.min.js') }}"> </script>
    <script src="{{ asset('dist/dist/icheck.min.js') }}"> </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <title>Import Form</title>
</head>
<body>

    <section style="padding-top:60px;" >
        <div class="container">
            <div class="row">
                <div class="col-md-6-offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Import
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('childs.import') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="file">Choose CSV</label>
                                    <input type="file" name="file" class="form-control"/>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>