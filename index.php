<?php 


?>

<?php require_once('./inc/header.php')?>

  <div class="container wrapper">
    <div class="content">
      <header class="header">
        <h1>Formulario para generar un cv</h1> 
      </header>
      <main class="main">
        <form class="form mt-4" action="./cv.php" method="POST">
          <div class="group-form">
            <label for="name">Nombre</label>
            <input id="name" name="name" type="text" placeholder="John"/>
          </div>
          <div class="group-form">
            <label for="lastname">Apellidos</label>
            <input id="lastname" name="lastname" type="text" placeholder="Dev"/>
          </div>
          <div class="group-form">
            <label for="date">Fecha de nacimiento</label>
            <input id="date" name="date" type="date" />
          </div>
          <div class="group-form">
            <label for="ocupacion">Ocupación</label>
            <input id="ocupacion" name="ocupacion" type="text" placeholder="Estudiante"/>
          </div>
          <div class="group-form">
            <label for="phone">Teléfono</label>
            <input id="phone" name="phone" type="text" placeholder="999999999"/>
          </div>
          <div class="group-form">
            <label for="email">Email</label>
            <input id="email" name="email" type="text" placeholder="email@email.com"/>
          </div>
          <div class="group-form">
            <label for="nacionalidad">Nacionalidad</label>
            <select id="nacionalidad" name="nacionalidad" type="text">
              <option value="Perú" selected>Perú</option>
              <option value="Argentina">Argentina</option>
              <option value="Venezuela">Venezuela</option>
              <option value="Chile">Chile</option>
              <option value="Brasil">Brasil</option>
            </select>
          </div>
          <div class="group-form">            
            <label for="aptitud">Escoge una aptitud de la lista</label>
            <input list="aptitudes" name="aptitud" id="aptitud"/>          
            <datalist id="aptitudes">
              <option value="Comunicación efectiva">
              <option value="Trabajo en equipo">
              <option value="Liderazgo">
              <option value="Resolución de problemas">
              <option value="Pensamiento crítico">
              <option value="Adaptabilidad">
              <option value="Gestión del tiempo">
              <option value="Iniciativa">
              <option value="Creatividad">
            </datalist>
          </div>
          <div class="group-form">
            <p>Nivel de inglés</p>
            <div class="group-label">
              <label for="basico">Básico</label>
              <input id="basico" type="radio" name="english_level" value="basico"/>
            </div>
            <div class="group-label">
              <label for="intermedio">Intermedio</label>
              <input id="intermedio" type="radio" name="english_level" value="intermedio"/>
            </div>
            <div class="group-label">
              <label for="avanzado">Avanzado</label>
              <input id="avanzado" type="radio" name="english_level" value="avanzado"/>
            </div>
            <div class="group-label">
              <label for="fluido">Fluido</label>
              <input id="fluido" type="radio" name="english_level" value="fluido"/>
            </div>
          </div>
          <div class="group-form">
            <label for="languages" class="underline">Lenguajes de programación</label>
            <select id="languages" name="languages[]" type="text" multiple>
              <option value="php">Php</option>
              <option value="javascript">Javascript</option>
              <option value="typescript">Typescript</option>
              <option value="golang">Golang</option>
              <option value="nodejs">Nodejs</option>
              <option value="java">Java</option>
              <option value="python">Python</option>
              <option value="rust">Rust</option>
              <option value="c++">C++</option>
              <option value="c">C</option>
              <option value="c#">C#</option>
              <option value="haskell">Haskell</option>
              <option value="kotlin">Kotlin</option>
              <option value="swift">Swift</option>
              <option value="r">R</option>
            </select>
          </div>
         
          <div class="group-form">
            <p>Habilidades</p>
            <div class="group-label">
              <label for="h1">Habilidades de negociación</label>
              <input id="h1" type="checkbox" name="habilidades[]" value="Habilidades de negociación"/>
            </div>
            <div class="group-label">
              <label for="h2">Diseño Gráfico</label>
              <input id="h2" type="checkbox" name="habilidades[]" value="Diseño Gráfico"/>
            </div>
            <div class="group-label">
              <label for="h3">Manejo de Excel</label>
              <input id="h3" type="checkbox" name="habilidades[]" value="Manejo de Excel"/>
            </div>
            <div class="group-label">
              <label for="h4">Creacion y edición de contenido multimedia</label>
              <input id="h4" type="checkbox" name="habilidades[]" value="Creacion y edición de contenido multimedia"/>
            </div>
            <div class="group-label">
              <label for="h5">Conocimientos en análisis de datos con R</label>
              <input id="h5" type="checkbox" name="habilidades[]" value="Conocimientos en análisis de datos con R"/>
            </div>
            <div class="group-label">
              <label for="h6">Reparación y mantenimiento de equipos informáticos</label>
              <input id="h6" type="checkbox" name="habilidades[]" value="Reparación y mantenimiento de equipos informáticos"/>
            </div>
            <div class="group-label">
              <label for="h7">Planificación y coordinación de eventos</label>
              <input id="h7" type="checkbox" name="habilidades[]" value="Planificación y coordinación de eventos"/>
            </div>
          </div>
          <div class="group-form">
            <label for="perfil">Descripción de mi perfil</label>
            <textarea placeholder="Escribe lo mejor de ti... (:" rows="5" name="perfil" id="perfil"></textarea>
          </div>
          <button class="btn" type="submit" >Enviar</button>
         
        </form>
         
      </main>
    </div>
  </div>
 
  
</body>
</html>