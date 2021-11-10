<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raw Material</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <script src="./js/firebase.js" type="module"></script>
  <script type="module">
    import { ItemClick } from './js/mainpage.js';
    import { getdata } from './js/mainpage.js';
   window.ItemClick=ItemClick;
   window.getdata=getdata;
  </script>
</head>

<body onload="getdata(1)">
 
  <div class="wrappers">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Element Example</h3>
        </div>

        <ul class="list-unstyled components" id="navitems">
          
        </ul>

        
    </nav>

  
   <!-- <button onclick="getCount()" id="b1">heye</button> -->
   
    <iframe id="mainFrame" src="./home.php" frameborder="0" width="100%" height="100%" >
    </iframe>
  
    

</body>

</html>