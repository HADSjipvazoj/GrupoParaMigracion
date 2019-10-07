<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>

      Añadir el formulario y los scripts necesarios para que el usuario <br>
      pueda introducir los datos de una pregunta con una imagen relacionada con la misma.
        <form action="">
            <p>Introduce tu dirección de correo: *</p>
            <input type="text" size="60" id="dirCorreo">
            <p>Introduce el enunciado de la pregunta: *</p>
            <input type="text" size="60" id="nombreProgunta">
            <p>Respuesta correcta: *</p>
            <input type="text" size="60" id="respuestaCorrecta">
            <p>Respuesta incorrecta1: *</p>
            <input type="text" size="60" id="respuestaIncorrecta1">
            <p>Respuesta incorrecta2: *</p>
            <input type="text" size="60" id="respuestaIncorrecta2">
            <p>Respuesta incorrecta3: *</p>
            <input type="text" size="60" id="respuestaIncorrecta3">
            <p>Complejidad de la pregunta: *</p>
            <select id="complejidad" >
                <option value="baja">Baja</option>
                <option value="media" selected>Media</option>
                <option value="alta">Alta</option>
            </select>
            <p>Introduce el tema de la pregunta: *</p>
            <input type="text" size="60" id="temaPregunta">
            <div id="selector">
            <input type="file" id="file" accept="image/*">
            </div>
            <img id="verImagen" src="" width="100"/>
            
            <p> <input type="submit" value="Enviar"></p>
        </form>     
        
        
        <script>
            
            $('#file').change(function(){
                console.log("GG");
                verImagen(this);
            })
            
            
            
            function verImagen(input){
                if(input.files && input.files[0]){
                    var reader = new FileReader()
                    
                    reader.onload = function (e){
                        $('#verImagen').attr('src',e.target.result);
                        
                    }
                    
                    reader.readAsDataURL(input.files[0])
                }
            }

        </script>
        
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
