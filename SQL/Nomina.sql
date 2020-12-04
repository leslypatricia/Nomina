Drop DATABASE Nominas;
create database NOMINAS charset =utf8 collate=utf8_unicode_ci ;         /* 'CREAR LA BASE DE DATOS NOMINAS'*/
USE NOMINAS;

create table Empleados(                                                   /* 'CREAR LA TABLA EMPLEADOS EN LA BBDD NOMINAS'*/
Cod_empleados INTEGER AUTO_INCREMENT PRIMARY KEY                          COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA,INCREMENTA AUTOMATICAMENTE',
Identidad varchar (25) not null                                           COMMENT 'CAMPO INGRESAR NUMERO DE IDENTIDAD DEL EMPLEADO',
Primer_Nombre varchar(25) not null                                        COMMENT 'CAMPO INGRESAR PRIMER NOMBRE DEL EMPLEADO',
Segundo_Nombre varchar(25) not null                                       COMMENT 'CAMPO INGRESAR SEGUNDO NOMBRE DEL EMPLEADO',                                             
Primer_Apellido varchar(25) not null                                      COMMENT 'CAMPO INGRESAR PRIMER APELLIDO EMPLEADO',
Segundo_Apellido varchar(25) not null                                     COMMENT 'CAMPO INGRESAR SEGUNDO APELLIDO EMPLEADO',
Fecha_nacimiento date not null                                            COMMENT 'FECHA DE NACIMIENTO LA CUAL DEBE SER MENOR O IGUAL A LA FECHA DEL SERVIDOR',
Correo Varchar(30) Unique not null                                        COMMENT 'CORREO ELECTRONICO DEL EMPLEADO',
Direccion varchar(25)                                                     COMMENT 'DIRECCION DEL EMPLEADO',
Telefono varchar(8)                                                       COMMENT 'TELEFONO DEL EMPLEADO',
Sexo varchar(2) not null                                                  COMMENT 'SEXO DEL EMPLEADO',
Cuenta_Bancaria varchar(20)                                               COMMENT 'CUENTA BANCARIA DEL EMPLEADO',
Fecha_ingreso date not null                                               COMMENT 'FECHA DE INGRESO DEL EMPLEADO',
Nacionalidad varchar(20)                                                  COMMENT 'NACIONALIDAD DEL EMPLEADO',
Sueldo_base double(20,0)not null                                          COMMENT 'SUELDO BASE QUE TENDRÁ EL EMPLEADO',
FormaPago varchar(20)                                                     COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA DE LA TABLA FORMA_PAGO',
Departamento varchar(20)                                                  COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA DE LA TABLA DEPARTAMENTO'
)ENGINE=INNODB
CHARACTER SET UTF8                                                         COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table PagoComplementario(                                          /*COMMENT 'CREAR LA TABLA PAGOCOMPLEMENTARIO EN LA BBDD NOMINAS'*/
Cod_PagoC integer primary key not null                                   COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA, GUARDA EL ID DE CADA UNO DE LOS PAGOS COMPLEMENTARIO',
Descripcion varchar(10) not null                                         COMMENT 'DESCRIPCION DEL TIPO DE PAGO COMPLEMENTARIO N QUE SE LE APLICA AL EMPLEADO ',
Porcentaje double(20,2) not null                                         COMMENT 'PORCENTAJE DE LA DEDUCCIÓN ',
Valor int not null                                                       COMMENT 'VALOR DE LA DEDUCCIÓN',
fijo int not null                                                        COMMENT 'VALOR DE LA DEDUCCION SIEMPRE Y CUANDO SEA FIJA'
)ENGINE=INNODB
CHARACTER SET UTF8                                                        COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table NominasPagosComplementarios(
Cod_NominaPC     integer primary key  not null                            COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA PARA EL CODIGO DE LA NOMINA DE PAGOS COMPLEMENTARIOS',
Cod_Empleados   integer                                                   COMMENT 'CAMPO QUE ALMACENA EL CÓDIGO',
Cod_PagoC varchar(10)                                                     COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA Y GUERDA EL ID DEL LOS PAGOS COMPLEMATARIO',
Total_PagosC   double(20,2)                                               COMMENT 'CAMPO QUE GUARDA EL TOTAL DE LOS PAGOS COMPLEMENTARIOS '
)ENGINE=INNODB
CHARACTER SET UTF8                                                        COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;


create table Aumento(                                                     /*COMMENT 'CREAR LA TABLA AUMENTO EN LA BBDD NOMINAS'*/
Cod_Aumento integer AUTO_INCREMENT  primary key not null                  COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA, AUTOINCREMENTABLE',
Porcentaje_aumento double(10,2)                                           COMMENT 'PORCENTAJE DE AUMENTO AL CUAL EL EMPLEADO A SIDO SUJETO',                                          
Año date                                                                  COMMENT 'AÑO EN EL CUAL SE ESTA EJECUTANDO EL AUMENTO',
Descripcion varchar(20) not null                                          COMMENT 'DESCRIPCION DEL TIPO DE AUMENTO DEL EMPLEADO ',
aplicado varchar(20)                                                      COMMENT 'SE DESCRIBE SI SE APLICÓ O NO EL AUMENTO'
)ENGINE=INNODB
CHARACTER SET UTF8                                                        COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table NominaAumento(                                              /*COMMENT 'CREAR LA TABLA NOMINADEDUCCIONES EN LA BBDD NOMINAS' */
Cod_NominaA     integer  primary key  not null                            COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA Y SE ALMACENA EL CÓDIGO DE LA NOMINA DE AUMENTO',
Cod_Empleados   integer  not null                                         COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA Y ALMACENA EL CODIGO DEL EMPLEADO',
Cod_Aumento     integer not null                                          COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA Y SE  ALMACENA EL CODIGO DEL AUMENTO QUE SE VA A UTILIZAR EN LOS EMPLEADOS',
Total_A   double(20,2)                                             
)ENGINE=INNODB
CHARACTER SET UTF8                                                       COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table Deducciones(                                                /*COMMENT 'CREAR LA TABLA DEDUCCIONES EN LA BBDD NOMINAS'*/
Cod_Deducciones integer primary key not null                             COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA Y ALMACENA EL CÓDOGO DE LA DEDUCCIÓN',
Descripcion varchar(10) not null                                         COMMENT 'DESCRIPCION DEL TIPO DE DEDUCCIÓN QUE SE LE APLICA AL EMPLEADO ',
Porcentaje double(20,2) not null                                         COMMENT 'PORCENTAJE DE LA DEDUCCIÓN ',
Valor int not null                                                       COMMENT 'VALOR DE LA DEDUCCIÓN',
fijo int not null                                                        COMMENT 'VALOR FIJO DE LA DEDUCCIÓN'                                                   
)ENGINE=INNODB
CHARACTER SET UTF8                                                       COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table NominaDeducciones(                                         /*COMMENT 'CREAR LA TABLA NOMINADEDUCCIONES EN LA BBDD NOMINAS' */
Cod_NominaD     integer primary key  not null                            COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA Y GUARDA EL CÓDIGO DE LA NOMINA DE DEDUCCIONES',
Cod_Empleados   integer  not null                                        COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA Y SE ALMACENA EL CÓDIGO DEL EMPLEADO',
Cod_Deducciones varchar(10)                                              COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA Y SE ALMACENA TOTAL DE LA DEDUCCION ,QUE SE VA A UTILIZAR',
Total_Deducciones   double(20,2)                                         COMMENT 'CAMPO DEL TOTAL DE LAS DEDUCCIONES'
)ENGINE=INNODB
CHARACTER SET UTF8                                                       COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table NominaGeneral(                                             /* COMMENT 'CREAR LA TABLA NOMINAGENERAL EN LA BBDD NOMINAS'*/
Cod_Nomina integer                                                       COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA Y ALMACENA EL CÓDIGO DE LA NÓMINA QUE SE VA A GENERAR',
Cod_empleados integer                                                    COMMENT 'CAMPO UTILIZADO COMO LLAVE FORANEA Y ALMACENA EL CÓDIGO DEL EMPLEADO',
Identidad varchar (25)                                                   COMMENT 'CAMPO INGRESAR NUMERO DE IDENTIDAD DEL EMPLEADO',
Primer_Nombre varchar(25)                                                COMMENT 'CAMPO INGRESAR PRIMER NOMBRE DEL EMPLEADO',
Segundo_Nombre varchar(25)                                               COMMENT 'CAMPO INGRESAR SEGUNDO NOMBRE DEL EMPLEADO',                                             
Primer_Apellido varchar(25)                                              COMMENT 'CAMPO INGRESAR PRIMER APELLIDO EMPLEADO',
Segundo_Apellido varchar(25)                                             COMMENT 'CAMPO INGRESAR SEGUNDO APELLIDO EMPLEADO',
Sueldo_base double(20,0)                                                 COMMENT 'SUELDO BASE',
Cant_Horas  integer                                                      COMMENT 'CANTIDAD DE HORAS EXTRAS',
Costo_U double(20,0)                                                     COMMENT 'COSTO UNITARIO POR HORA EXTRA',
TotalP_HE  double(20,0)                                                  COMMENT 'TOTAL A PAGAR POR HORAS EXTRAS',
Total_Devengado double(20,0)                                             COMMENT 'TOTAL DEVENGADO',
Total_Deducciones double(20,0)                                           COMMENT 'TOTAL DEDUCCIONES',
Total_PagosComplementarios double(20,0)                                   COMMENT 'TOTAL POR PAGOS COMPLEMENTARIOS',
Total_aumento double(20,0)                                               COMMENT 'campo para guardar el TOTAL DE AUMENTO , de cada empleado',
SUELDO_NETO_Pagar double(20,0)                                           COMMENT 'SUELDO NETO A PAGAR AL EMPLEADO',
FormaPago varchar(25)                                               COMMENT 'CAMPO para guardar la forma de pago del empleado',    
Fecha_Generada DATE                                                      COMMENT 'IMPRIME LA FECHA EXACTA EN LA QUE SE IMPRIME'
)ENGINE=INNODB  
CHARACTER SET UTF8                                                       COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;



create table Departamento(                                               /*'CREAR LA TABLA DEPARTAMENT EN LA BBDD NOMINAS'*/
Cod_Depto integer primary key                                             COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA Y GUARDA EL CÓDIGO DE DEPARTAMENTO QUE PERTENECE CADA UNO DE LOS EMPLEADOS',
Descripcion varchar(20) not null                                          COMMENT 'DESCRIPCION DEL DEPARTAMENTO AL CUAL PERTENECE EL EMPLEADO',
Cod_Jefe integer not null                                                 COMMENT 'CODIGO DEL JEFE DEL DEPARTAMENTO'
)ENGINE=INNODB
CHARACTER SET UTF8
COLLATE= UTF8_UNICODE_CI;


create table Jornada(                                                  /*COMMENT 'CREAR LA TABLA JORNADA EN LA BBDD NOMINAS'*/
Cod_Jornada integer AUTO_INCREMENT  primary key not null               COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA Y GUARDA EL CÓDIGO DE LA JORNADA',
Tipo_Jornada varchar(20) not null                                      COMMENT 'CAMPO TIPO DE JORNADA Y GUARDA EL TIPO DE JORNADA A LA QUE PERTENECE EL EMPLEADO'

)ENGINE=INNODB
CHARACTER SET UTF8                                                     COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table HoraExtra(                                             /*COMMENT 'CREAR LA TABLA HORA_EXTRA EN LA BBDD NOMINAS'*/
Cod_HExtra integer AUTO_INCREMENT  primary key NOT NULL               COMMENT 'COMMENT CAMPO QUE SE USA COMO LLAVE PRIMARIA Y GUARDA EL CÓDIGO DE LA HORAS EXTRA QUE HA REALIZADO EL EMPLEADO',
Cod_Jornada integer                                                   COMMENT 'CAMPO UTILIZADO COMO LLAVE FORANEA Y ALMACENA EL CÓDIGO DE LA JORNAA',
Cod_empleados integer                                                 COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA DE LA TABLA EMPLEADOS',
Sueldo_Ordinario double(20,0) not null                                COMMENT 'SUELDO BASE DE EMPLEADO',
Sueldo_Diario double(20,0) not null                                   COMMENT 'SUELDO DIARIO DEL EMPLEADO',
Sueldo_Hora double(20,0) not null                                     COMMENT 'SUELDO POR HORA DEL EMPLEADO',
Porce_Hora_Extra double(20,0) not null                                COMMENT 'PORCENTAJE HORA EXTRA',
pago_Hora double(20,0) not null                                       COMMENT 'PAGO POR HORA EXTRA',
Numero_horas integer not null                                         COMMENT 'CAMPO NUMERO DE HORAS TRABAJADAS',
Total_HE double(20,0)    not null                                     COMMENT 'TOTAL A PAGAR POR HORAS EXTRAS',
fecha date                                                            COMMENT 'LA FECHA EN QUE SE REALIZÓ LA HORA EXTRA'
)ENGINE=INNODB
CHARACTER SET UTF8                                                    COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table FormaPago(                                                /*COMMENT 'CREAR LA TABLA FORMAPAGO EN LA BBDD NOMINAS' */
Cod_FormaPago integer primary key                                     COMMENT'CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Descripcion varchar(30)                                               COMMENT 'SE ESTABLECE EL TIPO DE PAGO, YA SEA QUINCENAL Ó MENSUAL' 
)ENGINE=INNODB
CHARACTER SET UTF8                                                     COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;


create table usuario(                                                 /*COMMENT 'CREAR LA TABLA USUARIO EN LA BBDD NOMINAS'*/
Cod_Usuario integer primary key NOT NULL                              COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Usuario varchar(20) not null                                          COMMENT 'NOMBRE PARA INICIO DE SESION DE USUARIO',
Password varchar(20)not null                                          COMMENT 'CONTRASEÑA PARA INICIO DE SESION',
Correo varchar(20)not null                                            COMMENT 'CORREO ELECTRONICO DEL USUARIO, AYUDARA PARA RECUPERACION',
Cod_rol integer                                                       COMMENT 'PARA IDENTIFICAR SIES USUARIO NORMAL Ó ADMINISTRADOR',
Cod_empleados integer                                                 COMMENT 'CAMPO UTILIZADO COMO LLAVE FORANEA DE LA TABLA EMPLEADOS' 
)ENGINE=INNODB
CHARACTER SET UTF8                                                    COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table rol(                                                      /*COMMENT 'CREAR LA TABLA ROL EN LA BBDD NOMINAS' */
Cod_rol integer primary key                                            COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA' ,
Descripcion varchar (20)                                               COMMENT 'SE DESCRIBE EL TIPO DE ROL QUE SE LE ASIGNA A CADA EMPLEADO',
Cod_privilegios integer                                                 COMMENT 'CAMPO UTILIZADO COMO LLAVE FORANEA'
)ENGINE=INNODB
CHARACTER SET UTF8                                                     COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI; 

create table privilegios(                                              /*COMMENT 'CREAR LA TABLA PRIVILEGIOS EN LA BBDD NOMINAS' */
Cod_privilegios integer primary key                                     COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Descripcion varchar(30)                                                 COMMENT 'campo que se utiliza para , saber una pequeña descripción los permisos que tendra ese usuario'
                                                                    
)ENGINE=INNODB
CHARACTER SET UTF8                                                      COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;



#Crear llave foranea de Cod_empleados en la tabla HoraExtra con referencia de la tabla Empleados
alter table HoraExtra ADD FOREIGN KEY (Cod_empleados) REFERENCES Empleados(Cod_empleados);
#Crear llave foranea de Cod_Jornada en la tabla HoraExtra con referencia de la tabla Jornada
alter table HoraExtra ADD FOREIGN KEY (Cod_Jornada) REFERENCES Jornada(Cod_Jornada);
#Crear llave foranea de Cod_Empleados en la tabla Usuario con referencia de la tabla Empleados
alter table Usuario add  foreign key (Cod_empleados) references Empleados(Cod_empleados);
#Crear llave foranea de Dod_rol en la tabla Usuario con referencia de l atabla rol
alter table Usuario add  foreign key (Cod_rol) references rol(Cod_rol);
#Crear llave foranea de Cod_Privilegios en la tabla rol_Privilegios con referencia de la tabla Rol
alter table rol add  foreign key (Cod_privilegios) references privilegios(Cod_Privilegios);

#Insertar registros en la tabla Rol
INSERT INTO `rol` (`Cod_rol`, `Descripcion`) VALUES ('1000', 'Administrador'), ('2000', 'Empleado_Normal');

#Insertar registros en la tabla Privilegios
INSERT INTO `privilegios` (`Cod_privilegios`, `Descripcion`) VALUES ('1', 'Lectura-Modificacón-Eliminación'), ('2', 'Lectura');

#Insertar registros en la tabla Formapago
INSERT INTO `formapago` (`Cod_FormaPago`, `Descripcion`) VALUES ('1', 'Mensual'), ('2', 'Quincenal');

#Insertar registros en la tabla departamento
INSERT INTO `departamento` (`Cod_Depto`, `Descripcion`, `Cod_Jefe`) VALUES ('1', 'Administración', '1'), ('2', 'Contabilidad', '2'),('3', 'Tecnologia', '3');

#Insertar registros en la tabla jornada
INSERT INTO `jornada` (`Cod_Jornada`, `Tipo_Jornada`) VALUES ('1', 'Diurna'),('2', 'Nocturna'),('3', 'Mixta');

#Insertar registros en la tabla deducciones
INSERT INTO `deducciones` (`Cod_Deducciones`, `Descripcion`, `Porcentaje`, `Valor`, `fijo`) VALUES ('1', 'IHSS', '3.5', '0', '0'),('2', 'RAP', '1.5', '0', '0'),('3','IVM','2.5','0','0'),('4','Maternidad','2.5','0','0'),('5','Aport. Cooperativa','1.0','0','0'),('6','Prestamos','3.0','0','0');

#Insertar Registro en la tabla Pagos Complementarios 
INSERT INTO `pagocomplementario` (`Cod_PagoC`, `Descripcion`, `Porcentaje`, `Valor`, `fijo`) VALUES ('1', 'Bono', '1.5', '0', '0'),('2', 'Bono Estudiantil', '0', '0', '1808'),('3', 'Aguinaldo', '0', '0', '0'),('4', 'Catorceavo','0.00', '0', '0'),('5', 'Vacaciones', '0.00', '0', '0');                                                    

#Insertar 5 empleados de forma automatica
INSERT INTO `empleados` (`Cod_empleados`, `Identidad`, `Primer_Nombre`, `Segundo_Nombre`, `Primer_Apellido`, `Segundo_Apellido`, `Fecha_nacimiento`, `Correo`, `Direccion`, `Telefono`, `Sexo`, `Cuenta_Bancaria`, `Fecha_ingreso`, `Nacionalidad`, `Sueldo_base`, `FormaPago`, `Departamento`) VALUES ('1', '0819199000066', 'José', 'Mario', 'Gómez', 'López', '1990-11-08', 'josemario123_123@outlook.es', 'Prados Universitarios', '97217988', 'M', '20068043', '2020-10-01', 'Hondureña', '20000', 'Mensual', 'Tecnología'),('2', '0801197500555', 'Carlos', 'Manuel', 'Pérez', 'Torres', '1975-09-31', 'mtorres@gmail.com', 'Col. Los Pinos', '99554567', 'M', '345678987652', '2017-10-15', 'Hondureña', '11000', 'Mensual', 'Contabilidad'),('3', '1516197000304', 'José', 'David', 'Mondragón', 'Turcios', '1970-11-20', 'jdturcios@hotmail.com', 'Los Proceres', '33213456', 'M', '001235467891', '2018-10-15', 'Extranjera', '9000', 'Mensual', 'Administración'), ('4', '1517199755498', 'Marlon', 'Fernando', 'Ozorto', 'Miñiz', '1997-05-28', 'ozorto1997@yahoo.com', 'Villa Nueva', '98345643', 'M', '335678992387', '2019-05-01', 'Extranjera', '5250', 'Quincenal', 'Contabilidad'),('5', '0321197600354', 'Mauda', 'Patricia', 'Araujo', 'Cubas', '1976-02-21', 'patricia@gmail.com', 'Independencia', '89785676', 'F', '200135678223', '2020-05-15', 'Hondureña', '9500', 'Mensual', 'Tecnología'),('6', '2311200098765', 'Lorena', 'Abigail', 'López', 'Lagos', '2000-06-29', 'lalagos@hotmail.com', 'Las Torres', '95343465', 'F', '234567890987', '2016-11-15', 'Hondureña', '6000', 'Quincenal', 'Contabilidad'),('7', '1342200165345', 'Fernando', 'Josué', 'Díaz', 'Zelaya', '2001-08-15', 'fzelaya@gmail.com', 'Salamá', '99713403', 'M', '564327897654', '2017-02-01', 'Extranjera', '15000', 'Mensual', 'Administración'),('8', '1519196903567', 'Pedro', 'Jared', 'Meráz', 'Olivera', '1969-10-25', 'meraz1969@yahoo.com', 'Armenia', '31989009', 'M', '214590987656', '2016-09-05', 'Hondureña', '20000', 'Mensual', 'Administración'),('9', '2312197925678', 'Merary', 'Juliana', 'Bejarano', 'Trochéz', '1979-11-30', 'mjbejarano@gmail.com', 'Zoroguara', '97340321', 'F', '089076543456', '2015-11-30', 'Hondureña', '5750', 'Quincenal', 'Tecnología'),('10', '1520198890890', 'Marcos', 'Noé', 'Rochéz', 'Palma', '1988-07-19', 'marcospalma@hotmail.com', 'Punuare', '32679087', 'M', '032456789876', '2017-04-30', 'Hondureña', '8500', 'Mensual', 'Administración');

#Insertar un usuario
INSERT INTO `usuario` (`Cod_Usuario`, `Usuario`, `Password`, `Correo`, `Cod_rol`, `Cod_empleados`) VALUES ('1', 'Administrador', '1234', 'josemario123_123@outlook.es', '1000', '1');