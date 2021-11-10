<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/firebase.js" type="module"></script>

  <script type="module">
    import { onsubmitform } from './js/mainpage.js';
    import { triggermodal } from './js/mainpage.js';
    import { getdata } from './js/mainpage.js';
    window.onsubmitform = onsubmitform;
    window.triggermodal = triggermodal;
    window.getdata = getdata;
  </script>
</head>

<body style="background-color: lightgray;" onload="getdata(2)">
  <h3 class="text-center">Add new</h3>
  <div class="container m-4 w-75 ms-auto me-auto p-2 px-3" style="border: 1px solid darkgrey; border-radius: 10px;">
    <form method="post" onsubmit="return onsubmitform();">
      <div class="form-group">
        <label for="Eidedit">ID : </label>
        <input type="number" class="form-control" disabled id="Eidedit">
      </div>
      <div class="form-group">
        <label for="titleedit">Title : </label>
        <input type="text" class="form-control" id="titleedit">
      </div>
      <div class="form-group">
        <label for="codeedit">Code : </label>
        <textarea class="form-control" id="codeedit" rows="13"></textarea>
      </div>

      <button type="submit"  class="btn btn-primary m-2">Submit</button>

    </form>
  </div>
  <h3 class="text-center">History</h3>
  <div class="conatiner w-75 m-3 me-auto ms-auto p-2 px-3" style="border: 1px solid darkgrey; border-radius: 10px;">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody id="item">

      </tbody>
    </table>
  </div>




</body>

</html>