create database FunnyFlowerPot
USE FunnyFlowerPot

--Tabla Productos

create table Productos (
Id_prod int primary key not null ,
Nombre varchar (50),
Tipo varchar (50), 
Color varchar (50),
Categoria varchar (50),
Medida float ,
Cantidad int,
)
/*muestra la tabla y sus contenidos*/
select * from Productos
/*borra la tabla*/
drop table Productos
/*borra los datos de la tabla*/
delete from Productos
/*agregar campos a la tabla*/
alter table Productos add Precio SMALLMONEY

insert into Productos values (1, 'Black' ,'Maceta', 'negro y blanco', 'Diseño', 12, 3, 350)
insert into Productos values (2, 'Pink' , 'Maceta', 'rosados','Diseño' , 10, 4, 300)
insert into Productos values (3, 'Charmander', 'Maceta', 'naranja','Caricaturas', 10, 3,300)
insert into Productos values (4, 'Squirtle' ,'Maceta', 'celeste', 'Caricaturas', 10, 3,300)
insert into Productos values (5, 'Bulbasaur' , 'Maceta', 'verde', 'Caricaturas' , 10, 3,300)
insert into Productos values (6, 'Light Blue' ,'Maceta','celeste y rosa', 'Flores', 12, 3,350)
insert into Productos values (7, 'Chinita' , 'Maceta', 'blanco y rosa','Cute', 10, 3,300)
insert into Productos values (8, 'Chinita' , 'Maceta', 'blanco y rosa', 'Cute' , 8, 2,250)
insert into Productos values (9, 'Llamas', 'Maceta', 'amarillo','Cute', 10, 3, 300)
insert into Productos values (10, 'Llamas' , 'Maceta', 'verde','Cute', 10, 3,300)
insert into Productos values (11, 'Ponys' , 'Maceta', 'violeta rosa celeste', 'Caricaturas' ,10, 2,300)
insert into Productos values (12, 'Watermelon', 'Maceta', 'rosa y verde','Diseño', 10, 3,300)
insert into Productos values (13, 'Purple', 'Maceta', 'violeta','Diseño', 14, 3,400)
insert into Productos values (14, 'Violet', 'Maceta', 'rosa y violeta','Diseño', 12, 3,350)
insert into Productos values (15, 'Flower', 'Maceta', ' verde','Diseño', 10, 3,300)
insert into Productos values (16,'Chinita' , 'Maceta', 'blanco y celeste', 'Cute' , 8, 2,200)
insert into Productos values (17,'Chinita' , 'Maceta', 'blanco y verde', 'Cute' , 8, 2,200)
