<?php include 'log/header.php'?>


<div
    class="container-fluid" style="margin-top:20px; margin-left:20px";
>
    
<img src="img/logo.png" alt="" width="10%"  style="float: right;">

<form action="historial2.php" method="post">


    <input
    
        type="text"
        class="form-control"
        name="codigo"
        id=""
        aria-describedby="helpId"
        placeholder="#CODIGO PACIENTE"
        style="width: 400px; float:left; "
       
    />
    
    
    <input
        type="DATE"
        class="form-control"
        name="fecha_revision"
        id=""
        aria-describedby="helpId"
        placeholder="Fecha de actualizacion"
        style="width: 500px; float:left; margin-top:2px"
    />
   

    <input
        type="text"
        class="form-control"
        name="paciente"
        id=""
        aria-describedby="helpId"
        placeholder="NOMBRE DEL PACIENTE"
        style="width: 400px; float:left;"
    />
    

    
    <input
        type="text"
        class="form-control"
        name="telefono_paciente"
        id=""
        aria-describedby="helpId"
        placeholder="TELEFONO"
        style="width: 500px; float:left;margin-top:2px"
    />
   


    
    <input
        type="text"
        class="form-control"
        name="nombre_medico"
        id=""
        aria-describedby="helpId"
        placeholder="NOMBRE DEL MEDICO"
        style="width: 400px; float:left;"
    />
    

    
    <input
        type="text"
        class="form-control"
        name="telefono_medico"
        id=""
        aria-describedby="helpId"
        placeholder="TELEFONO"
        style="width: 500px; float:left;margin-top:2px"
    />

</div>

<div
    class="container-fluid" style="margin-left:5px"
>
   
<div class="card bg-primary text-white" style="margin-top:150px;">
<h4 style="background-color: green; text-align:center">MEDICAMENTOS ACTUALES Y PASADOS</h4>

    <div class="card-body">
    <span>Nombre del medicamento</span>
    <span style="padding-left: 30px;">Docificacion</span>
    <span style="padding-left: 30px;">FREQ</span>
    <span style="padding-left: 30px;">MEDICO</span>
    <span style="padding-left: 50px;">FECHA INICIO</span>
    <span style="padding-left: 70px;">FECHA FINAL</span>
    <span style="padding-left: 90px;">PROPOSITO</span>


    </div>
    
 
    </div>
      
        <input
            type="text"
            class="form-control"
            name="medicamento"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:240px ;float:left"
            data-bs-toggle="tooltip" data-bs-placement="top" title="Docificacion que el paciente puede soportar"
        />
    
      
        <input
            type="text"
            class="form-control"
            name="docificacion"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:120px ;float:left"
        />
      
        <input
            type="text"
            class="form-control"
            name="freq1"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:70px ;float:left"
        />


        <input
            type="text"
            class="form-control"
            name="medico_medicamento"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:100px ;float:left"
        />


        <input
            type="DATE"
            class="form-control"
            name="fecha_medicamento_inicio"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:180px ;float:left"
        />

        <input
            type="DATE"
            class="form-control"
            name="fecha_medicamento_fin"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:180px ;float:left"
        />

        <input
            type="text"
            class="form-control"
            name="proposito"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:195px ;float:left"
        />


</div>

<div
    class="container-fluid" style="margin-left:5px";
>
   
<div class="card bg-primary text-white" style="margin-top:80px;">
<h4 style="background-color: green; text-align:center">PROCEDIMIENTO QUIRURGICO</h4>

    <div class="card-body">
    <span>Nombre del medicamento</span>
    <span style="padding-left: 30px;">PROCEDIMIENTO</span>
    <span style="padding-left: 30px;">FREQ</span>
    <span style="padding-left: 30px;">MEDICO</span>
    <span style="padding-left: 50px;">FECHA INICIO</span>
    <span style="padding-left: 70px;">HOSPITAL</span>
    <span style="padding-left: 90px;">OBSERVACION</span>


    </div>
    
 
    </div>
      
        <input
            type="text"
            class="form-control"
            name="medicamento2"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:240px ;float:left"
            data-bs-toggle="tooltip" data-bs-placement="top" title="Docificacion que el paciente puede soportar"
        />
    
      
        <input
            type="text"
            class="form-control"
            name="procedimiento"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:120px ;float:left"
        />
      
        <input
            type="text"
            class="form-control"
            name="freq2"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:70px ;float:left"
        />


        <input
            type="text"
            class="form-control"
            name="medico_quirurgico"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:100px ;float:left"
        />


        <input
            type="DATE"
            class="form-control"
            name="fecha_quirurgico"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:180px ;float:left"
        />

        <input
            type="text"
            class="form-control"
            name="hospital"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:180px ;float:left"
        />

        <input
            type="text"
            class="form-control"
            name="observacion"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:195px ;float:left"
        />

  
</div>


<div
    class="container" style="margin-left: 20px"
>
   
<div class="card bg-primary text-white" style="margin-top:100px;width:450px  ">
<h4 style="background-color: green;">VACUNAS</h4>

    <div class="card-body">
    <span>Nombre del medicamento</span>
    <span style="padding-left: 100px;">Docificacion</span>
    
    
    </div>
</div>
      
    
        <input
            type="text"
            class="form-control"
            name="vacuna_tetanos"
            id=""
            aria-describedby="helpId"
            placeholder="TETANOS"
            style=" margin-top:-2px;width:300px ;float:left;COLOR: BLUE"
        />

        <input
            type="text"
            class="form-control"
            name="docificacion_tetanos"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:150px ;float:left"
        />

       
</div>





<div
    class="container" style="margin-left: 600px; margin-top:-200px"
>
   
<div class="card bg-primary text-white" style="margin-top:100px;width:450px  ">
<h4 style="background-color: green;">PROCEDIMIENTO QUIRÚRGICOS</h4>

    <div class="card-body">
    <span>Nombre del medicamento</span>
    <span style="padding-left: 100px;">Docificacion</span>
    
    
    </div>
</div>
      
    
        <input
            type="text"
            class="form-control"
            name="vacuna_fiebre_amarilla"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:300px ;float:left"
        />

        <input
            type="text"
            class="form-control"
            name="docificacion_fiebre_amarilla"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style=" margin-top:-2px;width:150px ;float:left"
        />

       
</div>


<button type="submit" value="registrar" style="margin-left:100px; background-color: blue; color:white">REGISTRAR</button>

</form>








