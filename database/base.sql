drop database if exists restaurant;
create database restaurant;
use restaurant;

create table roles (idRole int auto_increment, nmRole varchar(20), primary key (idRole));
insert into roles values (1, 'admin'), (2, 'Instructor'), (3, 'Supervisor'), (4, 'Reclutador');

create table permisos (idPermiso int auto_increment, nmPermiso varchar(30), idRole int, primary key(idPermiso), foreign key(idRole) references roles(idRole));

create table horarios (idHorario int auto_increment, lunes boolean, martes boolean, miercoles boolean, jueves boolean, viernes boolean, sabado boolean, domingo boolean, horaEntrada time, horaSalida time, primary key(idHorario));
insert into horarios values (1, 1, 1, 1, 1, 1, 0, 0, '07:00', '15:00');
insert into horarios values (2, 1, 1, 1, 1, 1, 0, 0, '15:00', '23:00');
insert into horarios values (3, 0, 1, 1, 1, 1, 1, 0, '07:00', '15:00');
insert into horarios values (4, 0, 1, 1, 1, 1, 1, 0, '15:00', '23:00');
insert into horarios values (5, 0, 0, 1, 1, 1, 1, 1, '07:00', '15:00');
insert into horarios values (6, 0, 0, 1, 1, 1, 1, 1, '15:00', '23:00');

create table contratos (idContrato int auto_increment, fechaInicio date, duracionMeses int, sueldo double, idRole int, idHorario int, primary key(idContrato), foreign key(idRole) references roles(idRole), foreign key(idHorario) references horarios(idHorario));
insert into contratos values (1, '2023-02-23', 6, 1800.00, 1, 1);

create table personal (idEmpleado bigint unsigned auto_increment, nombre varchar(20), apellidos varchar(20), DNI char(8), telefono char(9), direccion varchar(40), idContrato int, primary key(idEmpleado), foreign key(idContrato) references contratos(idContrato));
insert into personal values (1, 'Ingenieria', 'de Software I', '12345678', '987654321', 'Universidad Nacional de Trujillo', 1);
