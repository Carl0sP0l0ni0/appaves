<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" >
    

    <title>Document</title>
</head>
<body>
    <h1>Crear avistamiento</h1>
    <form action="{{ route('avistamientos.store') }}" method="POST"  enctype="multipart/form-data">
        @csrf       

    
       //crear formulario para crear un ave con nombre comun, nombre cientifico, familia, especie
       <div class="card">
        <div class="card-header ">
           
       
        <div class="card-body ">
            <h5 class="card-title">Registro Ave</h5><div class="form-group">

                //input desplegable de 5 nombre comun de aves
                <div class="col-4">
                    <label for="title">Nombre comun</label>
                    <select name="nombre_comun" class="form-select" aria-label="Default select example">
                        <option selected>Selecciona una ave</option>
                        <option value="Aguila">Aguila</option>
                        <option value="Gallina">Gallina</option>
                        <option value="Ganso">Ganso</option>
                        <option value="Pato">Pato</option>
                        <option value="Pavo">Pavo</option>
                      </select>

                </div>

               

            
            <div class="col-4">
                <label for="title">Nombre cientifico</label>
                <input type="text" name="nombre_cientifico" id="nombre_cientifico" class="form-control" placeholder="Nombre cientifico" aria-describedby="helpId">
          
            </div>
            <div class="col-4">
                <label for="title">Familia</label>
                <input type="text" name="familia" id="familia" class="form-control" placeholder="Familia" aria-describedby="helpId">
               
            </div>
            <div class="col-4">
                <label for="title">Especie</label>
                <input type="text" name="especie" id="especie" class="form-control" placeholder="Especie" aria-describedby="helpId">
               
            </div>
            <div class="col-4">
                <label for="title">Imagen</label>
                <input type="text" name="imagen" id="imagen" class="form-control" placeholder="Imagen" aria-describedby="helpId">
    
        </div>
        <div class="card-body ">
            <h5 class="card-title">Registro Ornitologo</h5><div class="form-group">

            <div class="col-4">
                <label for="title">Nombre Especialista</label>
                <input type="text" name="nombre" id="nombre_comun" class="form-control" placeholder="Nombre comun" aria-describedby="helpId">
            </div>
            <div class="col-4">
                <label for="title">CIP Profesional</label>
                <input type="text" name="codigo_profesional" id="nombre_cientifico" class="form-control" placeholder="Nombre cientifico" aria-describedby="helpId">
            </div>
            
    
        </div>


        <div class="card-body ">
            <h5 class="card-title">Registro Avistamientos</h5><div class="form-group">

           
           <div class="col-4">
            <label for="title">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" placeholder="Fecha" aria-describedby="helpId">
        </div>
        <div class="col-4">
            <label for="title">Ubicacion</label>
            <input type="text" name="ubicacion" id="ubicacion" class="form-control" placeholder="Ubicacion" aria-describedby="helpId">
        </div>



            
    
        </div>

        
        
        
       </div>
        
       
       
       

       
        <button type="submit" class="btn btn-primary">Crear</button>

        
       
    </form>
    
</body>
</html>