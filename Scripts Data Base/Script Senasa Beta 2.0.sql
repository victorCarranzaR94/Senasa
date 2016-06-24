create database senasaCO;

use senasaco;

create table tbEnfermedad(
codigo int primary key,
tipo varchar(20),
nombre varchar(80)
);


create table tbCategoriaAnimal(
codigo int primary key,
nombre varchar(80)
);

create table tbEnfermedadesAnimales(
codCatAnimal int,
codEnfermedad int ,
catidad int,
primary key(codCatAnimal,codEnfermedad));

create table tbEnferedadesOrdenSanitaria(
 codEnfermedad int,
codOrden int, 
primary key(codEnfermedad,codOrden)
);

create table tbOrdenSanataria(
codigo int primary key,
lugar varchar(80),
fecha date,
imagen varchar(80),
codUsuario int,
codVisita int
);

create table tbControlMovilidad(
codigo int primary key,
tipo varchar(20),
cantidad int,
codVisita int
);

create table tbFiscalizacion(
codigo int primary key,
descripcion varchar(200),
coidVisita int
);

create table tVisita(
codigo int primary key,
cantidadVisitas int,
codHojaVisita int
);

create table tbHojaVisita(
codigo int  primary key,
numHoja int,
cantidad int,
fecha date,
codUsuario int
);

create table tbUsuario(
codigo int primary key,
tipoUsuario varchar(80),
login varchar(20),
password varchar(20)
);
create table tbTarea(
codigo int primary key,
descripcion varchar(200),
lugar varchar(200),
fechaInicio date,
fechafinal date,
estado varchar(10)
);

create table tbCapacitacion(
codigo int primary key,
fecha date,
lugar varchar(200),
participantes int,
codTipoCapacitacion int,
codHojaVisita int
);

create table tbTipoCapacitacion(
codigo int primary key,
evento varchar(200),
cantidad  int
);

create table tbImportacionExportacion(
codigo int primary key,
numero int,
especie varchar(200),
codImportacion int,
codExportacion int,
codVisita int
);

create table tbOperacionSanitaria(
codigo int primary key,
fecha date,
lugar varchar(200),
cantidadAnimales int,
codVisita int
);