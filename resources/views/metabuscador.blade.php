<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form
        method="POST"
        action="{{ url ("buscar") }}"
        class="form-horizontal">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Búsqueda en varios motores</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">1. Ingrese el término de busqueda</label>
          <div class="col-md-4">
          <input id="termino" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="motores">2. Seleccione motor de búsqueda</label>
          <div class="col-md-4">
          <div class="radio">
            <label for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
              Google
            </label>
            </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="2">
              Bing
            </label>
            </div>
            <div class="radio">
             <label for="motores-2">
              <input type="radio" name="motores" id="motores-2" value="3">
                Yahoo
             </label>
            </div>
            <div class="radio">
             <label for="motores-3">
              <input type="radio" name="motores" id="motores-3" value="4">
              YouTube
             </label>
            </div>
            <div class="radio">
             <label for="motores-4">
              <input type="radio" name="motores" id="motores-4" value="5">
              Facebook
             </label>
            </div>
            <div class="radio">
             <label for="motores-4">
              <input type="radio" name="motores" id="motores-5" value="6">
              Twitter
             </label>
            </div>
            <div class="radio">
             <label for="motores-4">
              <input type="radio" name="motores" id="motores-6" value="7">
              Ecosia
             </label>
            </div>
            <div class="radio">
             <label for="motores-4">
              <input type="radio" name="motores" id="motores-7" value="8">
              Mojeek
             </label>
            </div>
            <div class="radio">
             <label for="motores-4">
              <input type="radio" name="motores" id="motores-8" value="9">
              DuckDuckGo
             </label>
            </div>
            <div class="radio">
             <label for="motores-4">
              <input type="radio" name="motores" id="motores-9" value="10">
              findX
             </label>
            </div>
            <div class="radio">
             <label for="motores-4">
              <input type="radio" name="motores" id="motores-10" value="11">
              Vimeo
             </label>
            </div>
            <div class="radio">
             <label for="motores-4">
              <input type="radio" name="motores" id="motores-11" value="12">
              WebCrawler
             </label>
            </div>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <button id="singlebutton" name="singlebutton" class="btn btn-info">Buscar</button>
            </div>
          </div>

        </fieldset>
        </form>

</body>
</html>
