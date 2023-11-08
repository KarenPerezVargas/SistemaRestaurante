drop database if exists restaurant;
create database restaurant;
use restaurant;

create table roles (idRole int auto_increment, nmRole varchar(50), primary key (idRole));
insert into roles values (1, 'admin'),
                         (2, 'Instructor'),
                         (3, 'Supervisor'),
                         (4, 'Reclutador'),
                         (5, 'Gerente de RR.HH'),
                         (6, 'Personal de Pedidos'),
                         (7, 'Repartidor'),
                         (8, 'Cliente'),
                         (9, 'Diseñador publicitario'),
                         (10, 'Coordinador de eventos'),
                         (11, 'Diseñador publicitario'),
                         (12, 'Agente de publicidad'),
                         (13, 'Gerente de almacén'),
                         (14, 'Personal de almacén'),
                         (15, 'Contador'),
                         (16, 'Recepcionista');

create table permisos (idPermiso int auto_increment, nmPermiso varchar(30), idRole int, primary key(idPermiso), foreign key(idRole) references roles(idRole));

create table horarios (idHorario int auto_increment, lunes boolean, martes boolean, miercoles boolean, jueves boolean, viernes boolean, sabado boolean, domingo boolean, horaEntrada time, horaSalida time, primary key(idHorario));
insert into horarios values (1, 1, 1, 1, 1, 1, 1, 0, '07:00', '15:00');
insert into horarios values (2, 1, 1, 1, 1, 1, 1, 0, '15:00', '23:00');
insert into horarios values (3, 1, 1, 1, 1, 1, 0, 0, '07:00', '15:00');
insert into horarios values (4, 0, 1, 1, 1, 1, 1, 0, '15:00', '23:00');
insert into horarios values (5, 0, 1, 1, 1, 1, 0, 0, '07:00', '15:00');
insert into horarios values (6, 1, 1, 1, 1, 0, 0, 0, '15:00', '23:00');


create table contratos (idContrato int auto_increment, fechaInicio date, duracionMeses int, sueldo double, idRole int, idHorario int, primary key(idContrato), foreign key(idRole) references roles(idRole), foreign key(idHorario) references horarios(idHorario));

-- insert into contratos values (1, '2023-02-23', 6, 1800.00, 1, 1);

create table personal (idEmpleado bigint unsigned auto_increment, nombre varchar(20), apellidos varchar(20), DNI char(8), telefono char(9), direccion varchar(40), idContrato int, primary key(idEmpleado), foreign key(idContrato) references contratos(idContrato));
-- insert into personal values (1, 'Ingenieria', 'de Software I', '12345678', '987654321', 'Universidad Nacional de Trujillo', 1);


-- create table pedidos(idpedido integer auto_increment, descripcion varchar(100), precio float, cantidad int, tipo varchar(80), fecha date, estado tinyint(4), primary key(idpedido), idCliente int, foreign key(idCliente) references Cliente(id));

create table bebidas(idbebida int auto_increment, descripcion varchar(40), precio float, cantidad int, tipo varchar(80), estado tinyint(4), primary key(idbebida));

create table productos(idproducto int auto_increment, descripcion varchar(40), precio float, cantidad int, tipo varchar(80), estado tinyint(4), primary key(idproducto));


/**
create table reservas(idreserva integer auto_increment, nombre varchar(50), direccion varchar(50), telefono char(9), correo varchar(50), fecha date, hora time, nroPersonas integer, area varchar(20), solicitudesAdicionales varchar(100), estadoReserva varchar(20), mesa varchar(10), idhistorial integer, idempleado integer , idmenu integer, idpago integer, estado tinyint(4), primary key(idreserva));
create table clientes (idCliente bigint unsigned auto_increment, nombre varchar(20), apellidos varchar(20), DNI char(8), telefono char(9), direccion varchar(40), primary key(idCliente));
insert into clientes values (1, 'Jaime', 'Perez Medina', '12345678', '987654321', 'Calle San Pedro 520');
create table menus(idMenu integer auto_increment, categoria varchar(20), descripcion varchar(20), idPlatoDetalle integer, precio float, primary key(idMenu));
create table plato(idPlato integer auto_increment, nombre varchar(20), precio float, primary key(idPlato))
*/
