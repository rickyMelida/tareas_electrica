create database 	
use tareas_electrica

create table usuarios (
	id_usuario int(5) auto_increment,
    usuario varchar(50) not null,
    pass varchar(50) not null,
    
    primary key(id_usuario)
);
SELECT usuario, pass FROM usuarios

show databases

create table tecnicos (
	id_tecnico int auto_increment,
    nombre varchar(100) not null,
    cargo_t varchar(50) not null,
	
    primary key(id_tecnico)
)

insert into tecnicos(nombre, turno, cargo_t) 
			  values("Camilo Barreto","Mañana","Senior"),
					("Miler Sosa", "Tarde", "Senior"),
                    ("Luis Cabrera", "Noche", "Senior"),
                    ("Ramon Coronel","Mañana", "Junior"),
                    ("Santiago Mendez","Mañana", "Junior"),
                    ("Ricardo Melida", "Tarde", "Junior"),
                    ("Nicolas Acosta", "Tarde", "Junior"),
                    ("Lazaro Romero","Noche", "Junior");

alter table tecnicos 
change cargo_t turno varchar(50);

alter table tecnicos add cargo_t varchar(50)

update tecnicos set turno = "Manhana" where id_tecnico=5

select turno from tecnicos ------

create table tareas (
	id_tarea int auto_increment,
    
    t_tarea varchar(100) not null,
    
    des_tarea text not null,
    
    fecha date,
    
    hora_i time,
    
    hora_f time,
    
    horas_h time,
    
    estado varchar(50) not null,
    
    turno varchar(50) not null,
    
    tecnico varchar(50) not null,
    
    cargo varchar(50) not null,
    
    primary key(id_tarea)
);

insert into tareas(t_tarea, des_tarea, fecha, hora_i, hora_f, horas_h, estado, turno, tecnico, cargo)
values("rutinas", "Rutinas de trafos y generadores","1992-02-12", "13:00", "15:30", "2:00", "F",  "tarde", "Ricardo Mélida", "Junior");

insert into usuarios(usuario, pass) 
		values('turnoTarde', '1975'),
			  ('turnoNoche', 'LuisC');

select * from tecnicos


select * from usuarios where usuario='turnoMañana' and pass='homero'