CREATE TABLE p_usuario ( co_usuario INT NOT NULL AUTO_INCREMENT , name VARCHAR(200) NOT NULL , email VARCHAR(200) NOT NULL , password VARCHAR(200) NOT NULL , remember_token VARCHAR(200) NULL , co_usuario_modifica INT NULL , fe_usuario_modifica DATETIME NULL , in_estado INT NULL , PRIMARY KEY (co_usuario)) ENGINE = InnoDB;

CREATE TABLE a_tipo_moneda (
  co_tipo_moneda int(11) NOT NULL,
  no_tipo_moneda varchar(50) DEFAULT NULL,
  nc_tipo_moneda varchar(50) DEFAULT NULL,
  in_estado int(11) DEFAULT NULL,
  co_usuario_modifica int(11) DEFAULT NULL,
  fe_usuario_modifica datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla a_tipo_moneda
--

INSERT INTO a_tipo_moneda (co_tipo_moneda, no_tipo_moneda, nc_tipo_moneda, in_estado, co_usuario_modifica, fe_usuario_modifica) VALUES
(1, 'SOLES', 'S/', 1, NULL, '2021-04-21 00:00:00'),
(2, 'DOLARES', 'US$.', 1, NULL, '2021-04-21 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla a_tipo_moneda
--
ALTER TABLE a_tipo_moneda
  ADD PRIMARY KEY (co_tipo_moneda);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla a_tipo_moneda
--
ALTER TABLE a_tipo_moneda
  MODIFY co_tipo_moneda int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

ALTER TABLE a_tipo_moneda ADD nu_monto_minimo DECIMAL(11,2) NULL AFTER nc_tipo_moneda;

CREATE TABLE a_forma_pago (
  co_forma_pago int(11) NOT NULL,
  no_forma_pago varchar(100) DEFAULT NULL,
  nc_forma_pago varchar(50) DEFAULT NULL,
  in_estado smallint(6) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla a_forma_pago
--

INSERT INTO a_forma_pago (co_forma_pago, no_forma_pago, nc_forma_pago, in_estado) VALUES
(1, 'CUOTAS FIJAS', 'CUOTAS FIJAS', 1),
(2, 'SOLO INTERESES', 'SOLO INTERESES', 1),
(3, 'PRESTAMO PUENTE', 'PRESTAMO PUENTE', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla a_forma_pago
--
ALTER TABLE a_forma_pago
  ADD PRIMARY KEY (co_forma_pago);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla a_forma_pago
--
ALTER TABLE a_forma_pago
  MODIFY co_forma_pago int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

CREATE TABLE a_tiempo_pago (
  co_tiempo_pago int(11) NOT NULL,
  no_tiempo_pago varchar(100) DEFAULT NULL,
  nc_tiempo_pago varchar(50) DEFAULT NULL,
  nu_tiempo_meses smallint(6) DEFAULT NULL,
  in_estado smallint(6) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla a_tiempo_pago
--

INSERT INTO a_tiempo_pago (co_tiempo_pago, no_tiempo_pago, nc_tiempo_pago, nu_tiempo_meses, in_estado) VALUES
(1, '1 AÑO', '1 AÑO', 12, 1),
(2, '2 AÑOS', '2 AÑOS', 24, 1),
(3, '3 AÑOS', '3 AÑOS', 36, 1),
(4, '4 AÑOS', '4 AÑOS', 48, 1),
(5, '5 AÑOS', '5 AÑOS', 60, 1),
(6, 'SIN VALOR', 'SIN VALOR', 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla a_tiempo_pago
--
ALTER TABLE a_tiempo_pago
  ADD PRIMARY KEY (co_tiempo_pago);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla a_tiempo_pago
--
ALTER TABLE a_tiempo_pago
  MODIFY co_tiempo_pago int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

CREATE TABLE r_forma_tiempo_pago ( co_forma_tiempo_pago INT NOT NULL AUTO_INCREMENT , co_forma_pago INT NOT NULL , co_tiempo_pago INT NOT NULL , co_usuario_modifica INT NOT NULL , fe_usuario_modifica DATETIME NOT NULL , in_estado INT NOT NULL , PRIMARY KEY (co_forma_tiempo_pago)) ENGINE = InnoDB;
CREATE TABLE p_configuracion_basica ( co_configuracion_basica INT NOT NULL AUTO_INCREMENT , nu_tasa_prestamo DECIMAL(11,6) NULL , nu_tasa_inversion DECIMAL(11,6) NULL , no_correo VARCHAR(150) NULL , no_telefonos VARCHAR(150) NULL , no_whatsapp VARCHAR(150) NULL , no_direccion VARCHAR(150) NULL , no_facebook VARCHAR(150) NULL , no_youtube VARCHAR(150) NULL , no_instagram VARCHAR(150) NULL , PRIMARY KEY (co_configuracion_basica)) ENGINE = InnoDB;
ALTER TABLE p_configuracion_basica ADD no_informacion TEXT NULL AFTER no_correo;
CREATE TABLE p_carrusel ( co_carrusel INT NOT NULL AUTO_INCREMENT , url_carrusel VARCHAR(100) NULL , no_carrusel VARCHAR(100) NULL , ti_carrusel VARCHAR(100) NULL , ti_original_carrusel VARCHAR(100) NULL , no_cabecera_carrusel VARCHAR(200) NULL , no_detalle_carrusel TEXT NULL , no_boton_carrusel VARCHAR(30) NULL , co_usuario_modifica INT NULL , fe_usuario_modifica DATETIME NULL , in_estado INT NULL , PRIMARY KEY (co_carrusel)) ENGINE = InnoDB;
ALTER TABLE p_carrusel ADD no_link_carrusel VARCHAR(200) NULL AFTER no_boton_carrusel;

CREATE TABLE p_producto ( co_producto INT NOT NULL AUTO_INCREMENT , url_producto VARCHAR(100) NULL , no_producto VARCHAR(100) NULL , ti_producto VARCHAR(100) NULL , ti_original_producto VARCHAR(100) NULL , no_cabecera_producto VARCHAR(200) NULL , no_detalle_producto TEXT NULL , no_boton_producto VARCHAR(30) NULL , co_usuario_modifica INT NULL , fe_usuario_modifica DATETIME NULL , in_estado INT NULL , PRIMARY KEY (co_producto)) ENGINE = InnoDB;
ALTER TABLE p_producto ADD no_link_producto VARCHAR(200) NULL AFTER no_boton_producto;

CREATE TABLE h_detalle_producto ( co_detalle_producto INT NOT NULL AUTO_INCREMENT , co_producto INT NULL , de_detalle_producto TEXT NULL , co_usuario_modifica INT NULL , fe_usuario_modifica DATETIME NULL , in_estado INT NULL , PRIMARY KEY (co_detalle_producto)) ENGINE = InnoDB;

CREATE TABLE p_testimonio ( co_testimonio INT NOT NULL AUTO_INCREMENT , no_testimonio VARCHAR(200) NULL , de_testimonio TEXT NULL , in_estado INT NULL , co_usuario_modifica INT NULL , fe_usuario_modifica DATETIME NULL , PRIMARY KEY (co_testimonio)) ENGINE = InnoDB;

ALTER TABLE a_forma_pago ADD de_forma_pago TEXT NULL AFTER nc_forma_pago;

CREATE TABLE p_colaborador ( co_colaborador INT NOT NULL AUTO_INCREMENT , no_nombre_colaborador VARCHAR(150) NULL , no_cargo_colaborador VARCHAR(100) NULL , no_link_colaborador VARCHAR(200) NULL , in_estado INT NULL , co_usuario_modifica INT NULL , fe_usuario_modifica DATETIME NULL , PRIMARY KEY (co_colaborador)) ENGINE = InnoDB;
ALTER TABLE p_colaborador ADD url_colaborador VARCHAR(100) NULL AFTER co_colaborador;
ALTER TABLE p_colaborador ADD no_colaborador VARCHAR(100) NULL AFTER url_colaborador;
ALTER TABLE p_colaborador ADD ti_colaborador VARCHAR(100) NULL AFTER no_colaborador;
ALTER TABLE p_colaborador ADD ti_original_colaborador VARCHAR(100) NULL AFTER ti_colaborador;

CREATE TABLE p_pregunta_frecuente ( co_pregunta_frecuente INT NOT NULL AUTO_INCREMENT , no_titulo_pregunta_frecuente TEXT NULL , no_detalle_pregunta_frecuente TEXT NULL , in_estado INT NULL , in_tipo INT NULL COMMENT '1 = prestamos, 2 = factoring , 3 = invertir' , co_usuario_modifica INT NULL , fe_usuario_modifica DATETIME NULL , PRIMARY KEY (co_pregunta_frecuente)) ENGINE = InnoDB;

--NUEVO
ALTER TABLE p_testimonio ADD url_testimonio VARCHAR(100) NULL AFTER co_testimonio;
ALTER TABLE p_testimonio ADD no_img_testimonio VARCHAR(100) NULL AFTER url_testimonio;
ALTER TABLE p_testimonio ADD ti_testimonio VARCHAR(100) NULL AFTER no_img_testimonio;
ALTER TABLE p_testimonio ADD ti_original_testimonio VARCHAR(100) NULL AFTER ti_testimonio;
ALTER TABLE p_testimonio ADD no_link_video VARCHAR(200) NULL AFTER de_testimonio;
ALTER TABLE p_testimonio ADD in_tipo INT NULL COMMENT '1 = testimonio , 2 = quienes hablan' AFTER in_estado;
ALTER TABLE p_producto ADD no_link_video VARCHAR(200) NULL AFTER no_link_producto;
CREATE TABLE p_galeria ( co_galeria INT NOT NULL AUTO_INCREMENT , url_galeria VARCHAR(100) NULL , no_galeria VARCHAR(100) NULL , ti_galeria VARCHAR(100) NULL , ti_original_galeria VARCHAR(100) NULL , in_estado INT NULL , co_usuario_modifica INT NULL , fe_usuario_modifica DATETIME NULL , PRIMARY KEY (co_galeria)) ENGINE = InnoDB;

--NUEVO

ALTER TABLE p_producto ADD in_web INT NULL COMMENT '1 = prestamos, 2 = factoring, 3 = invertir' AFTER in_estado;
ALTER TABLE p_producto ADD in_seccion INT NULL COMMENT '1 = pasos, 2 = beneficios, 3 = beneficios o caracteristicas' AFTER in_web;
ALTER TABLE p_configuracion_basica ADD url_prestamo VARCHAR(150) NULL AFTER co_configuracion_basica;
ALTER TABLE p_configuracion_basica ADD url_factoring VARCHAR(150) NULL AFTER url_prestamo;
ALTER TABLE p_configuracion_basica ADD url_invertir VARCHAR(150) NULL AFTER url_factoring;
ALTER TABLE p_configuracion_basica ADD link_prestamo VARCHAR(200) NULL AFTER url_invertir;
ALTER TABLE p_configuracion_basica ADD link_factoring VARCHAR(200) NULL AFTER link_prestamo;
ALTER TABLE p_configuracion_basica ADD link_invertir VARCHAR(200) NULL AFTER link_factoring;
ALTER TABLE p_configuracion_basica ADD link_presentacion VARCHAR(200) NULL AFTER link_invertir;

--NUEVO

ALTER TABLE p_configuracion_basica ADD url_portada_invertir VARCHAR(200) NULL AFTER co_configuracion_basica;
ALTER TABLE p_configuracion_basica ADD url_portada_prestamo VARCHAR(200) NULL AFTER co_configuracion_basica;
ALTER TABLE p_configuracion_basica ADD url_portada_inicio VARCHAR(200) NULL AFTER co_configuracion_basica;