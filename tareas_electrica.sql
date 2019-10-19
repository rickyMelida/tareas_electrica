create database 	
use tareas_electrica

create table tecnicos (
	id_tecnico int auto_increment,
    nombre varchar(100) not null,
    cargo_t varchar(50) not null,
	turno varchar(50) not null,
    primary key(id_tecnico)
)

create table usuarios (
	id_usuario int(5) auto_increment,
    usuario varchar(50) not null,
    pass varchar(50) not null,
    tecns int not null,
    
    primary key(id_usuario),
    foreign key (tecns) references tecnicos(id_tecnico)
);

show databases

insert into tecnicos(nombre, cargo_t, turno) 
			  values("Camilo Barreto","Senior", "Mañana"),
					("Miler Sosa", "Senior", "Tarde"),
                    ("Luis Cabrera", "Senior", "Noche"),
                    ("Ramon Coronel", "Junior", "Mañana"),
                    ("Santiago Mendez", "Junior", "Mañana"),
                    ("Ricardo Melida", "Junior", "Tarde" ),
                    ("Nicolas Acosta", "Junior", "Tarde"),
                    ("Lazaro Romero", "Junior", "Noche" );

update tecnicos 

alter table tecnicos add cargo_t varchar(50)

update tecnicos set turno = "Manhana" where id_tecnico=5

select * from tecnicos
SELECT * from tecnicos where turno = 'Tarde'
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

insert into usuarios(usuario, pass, tecns) 
		values('turnoMañana', 'homero', '1'),
			  ('turnoTarde', '1975', '2'),
			  ('turnoNoche', 'LuisC', '3');

select * from usuarios


select * from usuarios where usuario='turnoMañana' and pass='homero'


delete from tecnicos where id_tecnico > 9