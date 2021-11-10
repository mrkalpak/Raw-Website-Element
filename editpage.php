<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>
<body>
<div class="container m-4 w-50 ms-auto me-auto" style="border: 1px solid darkgrey; border-radius: 10px;">
    <form>
        <div class="form-group">
          <label for="Eid">ID : </label>
          <input type="number" class="form-control" disabled id="Eid" >
        </div>
        <div class="form-group">
          <label for="title">Title : </label>
          <input type="text" class="form-control" id="Title">
        </div>
        <div class="form-group">
          <label for="code">Code : </label>
          <textarea class="form-control" id="code" rows="5"></textarea>
        </div>
      
        <button type="submit" class="btn btn-primary m-2">Update</button>
        <button type="button" onclick="window.location.href='./admin.php'" class="btn btn-primary m-2">Back</button>

      </form>
    </div>
</body>
</html>