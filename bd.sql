select * FROM pacientes


use clinica;


CREATE table facturacion(
clinica VARCHAR(20),
direccion_clinica VARCHAR(100),
fecha_inicio DATE,
fecha_final  DATE,
nombre_cliente varchar(20),
direccion_cliente VARCHAR(100),
precio_consulta int(10));


USE clinica;

drop Table facturacion;

use clinica

create table historial(
codigo int(10),
nombre_paciente VARCHAR(30),
nombre_medico VARCHAR(30),
fecha_revision DATE,
telefono_paciente int(10),
telefono_medico int(10),
medicamento varchar(30),
docificacion int(5),
freq1 varchar (20),
medico_medicamento VARCHAR(20),
fecha_medicamento_inicio DATE,
fecha_medicamento_fin DATE,
proposito varchar (20),
medicamento2 VARCHAR(30),
procedimiento VARCHAR (10),
freq2 varchar (20),
medico_quirurgico varchar(20),
fecha_quirurgico DATE,
hospital VARCHAR(20),
observacion varchar (100),
vacuna_tetanos varchar (20),
docificacion_tetanos varchar (10),
vacuna_fiebre_amarilla int(5),
docificacion_fiebre_amarilla)













