create database senasaCO;

use senasaco;

create table tbEnfermedad(
codigo int primary key auto_increment,
tipo varchar(20),
nombre varchar(80)
);


create table tbCategoriaAnimal(
codigo int primary key key auto_increment,
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
codigo int primary key key auto_increment,
lugar varchar(80),
fecha date,
imagen varchar(80),
codUsuario int,
codVisita int
);

create table tbControlMovilidad(
codigo int primary key key auto_increment,
tipo varchar(20),
cantidad int,
codVisita int
);

create table tbFiscalizacion(
codigo int primary key key auto_increment,
descripcion varchar(200),
coidVisita int
);

create table tVisita(
codigo int primary key key auto_increment,
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
codigo int primary key key auto_increment,
tipoUsuario varchar(80),
login varchar(20),
password varchar(1000)
);
create table tbTarea(
codigo int primary key key auto_increment,
descripcion varchar(200),
lugar varchar(200),
fechaInicio date,
fechafinal date,
estado varchar(10)
);

create table tbCapacitacion(
codigo int primary key key auto_increment,
fecha date,
lugar varchar(200),
participantes int,
codTipoCapacitacion int,
codHojaVisita int
);

create table tbTipoCapacitacion(
codigo int primary key key auto_increment,
evento varchar(200),
cantidad  int
);

create table tbImportacionExportacion(
codigo int primary key key auto_increment,
numero int,
especie varchar(200),
codImportacion int,
codExportacion int,
codVisita int
);

create table tbOperacionSanitaria(
codigo int primary key key auto_increment,
fecha date,
lugar varchar(200),
cantidadAnimales int,
codVisita int
);