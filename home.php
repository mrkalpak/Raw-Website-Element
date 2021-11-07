<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body class="bg-transparent" >
    <div class="container">
        <div class="row "> 
            <div class="container text-center m-2 ">
            <button type="button" onclick="openIframe()" class="btn btn-primary ">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-play-fill me-0 pe-0" viewBox="0 0 16 16">
                    <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                  </svg>Run
            </button>
            </div>
        </div>
        <div class="row " style="height: 100%;">
            <div class="col rounded">
               
                   
                        <textarea class="mt-2" style="height: 88vh; width: 100%;  resize: none;" id="code">
<!DOCTYPE html>
<html>
<body>
<h3 style="color:Tomato;">Hello World</h3>
<p style="color:DodgerBlue;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
<p style="color:MediumSeaGreen;">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
</body>
</html>
                            
                        </textarea>
                   
               
            </div>
            <div class="col">
               
                <iframe src="./tryit.html" id="outputIframe" frameborder="" style="height: 88vh; width: 100%;border: 0.7px solid black; " class="mt-2"></iframe>
            </div>
        </div>
    </div>

    <script>
         function openIframe() {
            var editorHTML = document.getElementById('code').value;
            var iframe = document.getElementById('outputIframe');
            iframe.contentWindow.document.open();
            iframe.contentWindow.document.write(editorHTML);
            iframe.contentWindow.document.close();
        }
    </script>
</body>

</html>