<html>
    <head>
        <title>
            testitflab27
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="background: hsl(340, 56%, 89%);padding: 20px;border-radius: 30px;">
            <h1>
                Test ITF Lab
            </h1>
            <form action="insert.php" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">name</label>
                  <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">weight</label>
                  <input name="weight" type="number" step="0.01" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">height</label>
                  <input name="height" type="number" step="0.01" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group form-check">
                </div>
                <button type="submit" class="btn btn-warning">Submit</button>
            </form>
        </div>
    </body>
</html>