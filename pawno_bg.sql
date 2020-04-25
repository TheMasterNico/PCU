-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2015 at 02:44 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pawno_bg`
--

-- --------------------------------------------------------

--
-- Table structure for table `cajeros`
--

CREATE TABLE IF NOT EXISTS `cajeros` (
  `ID` int(11) NOT NULL,
  `X` float NOT NULL,
  `Y` float NOT NULL,
  `Z` float NOT NULL,
  `rX` float NOT NULL,
  `rY` float NOT NULL,
  `rZ` float NOT NULL,
  `Vida` int(4) NOT NULL DEFAULT '50',
  `Dinero` int(12) NOT NULL DEFAULT '55555555',
  `Activo` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `casas`
--

CREATE TABLE IF NOT EXISTS `casas` (
  `IDH` int(3) NOT NULL,
  `Propietario` varchar(24) NOT NULL DEFAULT 'En Venta',
  `Precio` int(12) NOT NULL,
  `PosEX` float NOT NULL,
  `PosEY` float NOT NULL,
  `PosEZ` float NOT NULL,
  `PosEA` float NOT NULL,
  `PosSX` float NOT NULL,
  `PosSY` float NOT NULL,
  `PosSZ` float NOT NULL,
  `PosSA` float NOT NULL,
  `Puerta` int(1) NOT NULL DEFAULT '0',
  `PosCX` float NOT NULL DEFAULT '0',
  `PosCY` float NOT NULL DEFAULT '0',
  `PosCZ` float NOT NULL DEFAULT '0',
  `PosCA` float NOT NULL DEFAULT '0',
  `Money` int(12) NOT NULL DEFAULT '0',
  `Activa` int(1) NOT NULL DEFAULT '0',
  `DuplicadoH` int(3) NOT NULL DEFAULT '0',
  `InteriorH` int(3) NOT NULL DEFAULT '1',
  `VirtualWH` int(3) NOT NULL,
  `TipoH` int(2) NOT NULL,
  `NivelH` int(3) NOT NULL,
  `GarageID` int(4) NOT NULL DEFAULT '0',
  `OBJPiso` int(3) NOT NULL DEFAULT '0',
  `OBJParedes` int(3) NOT NULL DEFAULT '0',
  `OBJTecho` int(3) NOT NULL DEFAULT '0',
  `OBJPuerta` int(3) NOT NULL DEFAULT '1506',
  `id_user` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDH`),
  UNIQUE KEY `IDH` (`IDH`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `configuracion`
--

CREATE TABLE IF NOT EXISTS `configuracion` (
  `Usuarios` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Usuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuracion`
--

INSERT INTO `configuracion` (`Usuarios`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `facciones`
--

CREATE TABLE IF NOT EXISTS `facciones` (
  `FBorrada` int(1) NOT NULL DEFAULT '0',
  `FActiva` int(1) NOT NULL DEFAULT '1',
  `FId` int(4) NOT NULL,
  `FNombre` varchar(42) NOT NULL,
  `FMensaje` varchar(80) NOT NULL,
  `FColor1` int(3) NOT NULL DEFAULT '-1',
  `FColor2` int(3) NOT NULL DEFAULT '-1',
  `FLider` varchar(24) NOT NULL,
  `FMiembros` int(3) NOT NULL DEFAULT '1',
  `FHQX` float NOT NULL,
  `FHQY` float NOT NULL,
  `FHQZ` float NOT NULL,
  `FDinero` int(13) NOT NULL DEFAULT '50000',
  `FCajaFuerteX` float NOT NULL,
  `FCajaFuerteY` float NOT NULL,
  `FCajaFuerteZ` float NOT NULL,
  `FCajaFuerteA` float NOT NULL DEFAULT '0',
  `FBanco` int(13) NOT NULL DEFAULT '5000',
  `FEntradaX` float NOT NULL DEFAULT '0',
  `FEntradaY` float NOT NULL DEFAULT '0',
  `FEntradaZ` float NOT NULL DEFAULT '-100',
  `FEntradaA` float NOT NULL DEFAULT '0',
  `FText3DEntrada` varchar(80) NOT NULL,
  `FInterior` int(2) NOT NULL,
  `FVirtualWorld` int(2) NOT NULL,
  `FSalidaX` float NOT NULL DEFAULT '0',
  `FSalidaY` float NOT NULL DEFAULT '0',
  `FSalidaZ` float NOT NULL DEFAULT '-100',
  `FSalidaA` float NOT NULL DEFAULT '0',
  `FText3DSalida` varchar(80) NOT NULL DEFAULT 'Puerta de salida al exterior',
  `FRangos1` varchar(32) NOT NULL DEFAULT 'Lider',
  `FRangos2` varchar(32) NOT NULL DEFAULT 'Rango2',
  `FRangos3` varchar(32) NOT NULL DEFAULT 'Rango3',
  `FRangos4` varchar(32) NOT NULL DEFAULT 'Rango4',
  `FRangos5` varchar(32) NOT NULL DEFAULT 'Rango5',
  `FRangos6` varchar(32) NOT NULL DEFAULT 'Rango6',
  `FSkins1` int(3) NOT NULL,
  `FSkins2` int(3) NOT NULL,
  `FSkins3` int(3) NOT NULL,
  `FSkins4` int(3) NOT NULL,
  `FSkins5` int(3) NOT NULL,
  `FSkins6` int(3) NOT NULL,
  `FMapIcon` int(2) NOT NULL,
  `FArmas1` int(3) NOT NULL DEFAULT '45',
  `FArmas2` int(3) NOT NULL DEFAULT '45',
  `FArmas3` int(3) NOT NULL DEFAULT '45',
  `FArmas4` int(3) NOT NULL DEFAULT '45',
  `FArmas5` int(3) NOT NULL DEFAULT '45',
  `FArmas6` int(3) NOT NULL DEFAULT '45',
  `FArmas7` int(3) NOT NULL DEFAULT '45',
  `FArmas8` int(3) NOT NULL DEFAULT '45',
  `FArmas9` int(3) NOT NULL DEFAULT '45',
  `FArmas10` int(3) NOT NULL DEFAULT '45',
  `FMunicion1` int(6) NOT NULL DEFAULT '0',
  `FMunicion2` int(6) NOT NULL DEFAULT '0',
  `FMunicion3` int(6) NOT NULL DEFAULT '0',
  `FMunicion4` int(6) NOT NULL DEFAULT '0',
  `FMunicion5` int(6) NOT NULL DEFAULT '0',
  `FMunicion6` int(6) NOT NULL DEFAULT '0',
  `FMunicion7` int(6) NOT NULL DEFAULT '0',
  `FMunicion8` int(6) NOT NULL DEFAULT '0',
  `FMunicion9` int(6) NOT NULL DEFAULT '0',
  `FMunicion10` int(3) NOT NULL DEFAULT '0',
  `FTipo` int(1) NOT NULL,
  `FNivel` int(2) NOT NULL DEFAULT '1',
  `FALvl1` int(1) NOT NULL DEFAULT '6',
  `FALvl2` int(1) NOT NULL DEFAULT '6',
  `FALvl3` int(1) NOT NULL DEFAULT '6',
  `FALvl4` int(1) NOT NULL DEFAULT '6',
  `FALvl5` int(1) NOT NULL DEFAULT '6',
  `FALvl6` int(1) NOT NULL DEFAULT '6',
  `FALvl7` int(1) NOT NULL DEFAULT '6',
  `FALvl8` int(1) NOT NULL DEFAULT '6',
  `FALvl9` int(1) NOT NULL DEFAULT '6',
  `FALvl10` int(1) NOT NULL DEFAULT '6',
  `FAMun1` int(5) NOT NULL DEFAULT '20',
  `FAMun2` int(5) NOT NULL DEFAULT '20',
  `FAMun3` int(5) NOT NULL DEFAULT '20',
  `FAMun4` int(5) NOT NULL DEFAULT '20',
  `FAMun5` int(5) NOT NULL DEFAULT '20',
  `FAMun6` int(5) NOT NULL DEFAULT '20',
  `FAMun7` int(5) NOT NULL DEFAULT '20',
  `FAMun8` int(5) NOT NULL DEFAULT '20',
  `FAMun9` int(5) NOT NULL DEFAULT '20',
  `FAMun10` int(5) NOT NULL DEFAULT '20',
  `FAMin1` int(5) NOT NULL DEFAULT '5',
  `FAMin2` int(5) NOT NULL DEFAULT '5',
  `FAMin3` int(5) NOT NULL DEFAULT '5',
  `FAMin4` int(5) NOT NULL DEFAULT '5',
  `FAMin5` int(5) NOT NULL DEFAULT '5',
  `FAMin6` int(5) NOT NULL DEFAULT '5',
  `FAMin7` int(5) NOT NULL DEFAULT '5',
  `FAMin8` int(5) NOT NULL DEFAULT '5',
  `FAMin9` int(5) NOT NULL DEFAULT '5',
  `FAMin10` int(5) NOT NULL DEFAULT '5',
  `FAutos` int(2) NOT NULL DEFAULT '0',
  `PortonActivo` int(2) NOT NULL DEFAULT '0',
  `PortonModel` int(5) NOT NULL DEFAULT '968',
  `PortonAX` float NOT NULL,
  `PortonAY` float NOT NULL,
  `PortonAZ` float NOT NULL,
  `PortonARX` float NOT NULL,
  `PortonARY` float NOT NULL DEFAULT '-1',
  `PortonARZ` float NOT NULL,
  `PortonBX` float NOT NULL,
  `PortonBY` float NOT NULL,
  `PortonBZ` float NOT NULL,
  `PortonBRX` float NOT NULL,
  `PortonBRY` float NOT NULL,
  `PortonBRZ` float NOT NULL,
  `ArmarioX` float NOT NULL DEFAULT '0',
  `ArmarioY` float NOT NULL DEFAULT '0',
  `ArmarioZ` float NOT NULL DEFAULT '0',
  `SXA` float NOT NULL DEFAULT '0',
  `SYA` float NOT NULL DEFAULT '0',
  `SZA` float NOT NULL DEFAULT '-100',
  `SAA` float NOT NULL DEFAULT '0',
  `SXB` float NOT NULL DEFAULT '0',
  `SYB` float NOT NULL DEFAULT '0',
  `SZB` float NOT NULL DEFAULT '0',
  `SAB` float DEFAULT '0',
  `MultaX` float NOT NULL DEFAULT '0',
  `MultaY` float NOT NULL DEFAULT '0',
  `MultaZ` float NOT NULL DEFAULT '-100',
  `PuertaFac` int(11) NOT NULL DEFAULT '1',
  `id_user` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`FId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `garages`
--

CREATE TABLE IF NOT EXISTS `garages` (
  `ID` int(3) NOT NULL,
  `Tipo` int(2) NOT NULL,
  `Type` int(2) NOT NULL DEFAULT '0',
  `EX` float NOT NULL,
  `EY` float NOT NULL,
  `EZ` float NOT NULL,
  `EA` float NOT NULL,
  `SX` float NOT NULL DEFAULT '-578.17',
  `SY` float NOT NULL DEFAULT '2594.06',
  `SZ` float DEFAULT '65.9021',
  `SA` float NOT NULL DEFAULT '183.292',
  `Inte` int(3) NOT NULL,
  `VW` int(3) NOT NULL,
  `Precio` int(12) NOT NULL DEFAULT '0' COMMENT 'De Compra',
  `Propietario` varchar(42) NOT NULL,
  `Cost` int(12) NOT NULL DEFAULT '0' COMMENT 'De entrada',
  `CasaID` int(3) NOT NULL DEFAULT '0',
  `Venta` int(2) NOT NULL DEFAULT '0',
  `Puerta` int(2) NOT NULL DEFAULT '0',
  `X2` float NOT NULL,
  `Y2` float NOT NULL,
  `Ocupado` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `granja`
--

CREATE TABLE IF NOT EXISTS `granja` (
  `ID` int(5) NOT NULL,
  `Paso` int(3) NOT NULL DEFAULT '0',
  `X` float NOT NULL,
  `Y` float NOT NULL,
  `Z` float NOT NULL,
  `A` float NOT NULL,
  `IDUser` int(3) NOT NULL,
  `Tipo` int(11) NOT NULL,
  `IDGranja` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `granjas`
--

CREATE TABLE IF NOT EXISTS `granjas` (
  `ID` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT '0' COMMENT 'Usuario o Facción',
  `Propietario` varchar(24) NOT NULL DEFAULT 'Estado',
  `Area` varchar(72) NOT NULL,
  `CompraVenta` varchar(26) NOT NULL,
  `AutoSacar` varchar(55) NOT NULL,
  `Almacen` varchar(31) NOT NULL DEFAULT '500|500|500|500' COMMENT 'Marihuana|Cocaina|Heroina|Trigo',
  `Estado` int(11) NOT NULL DEFAULT '0',
  `Precio` int(11) NOT NULL,
  `Dinero` int(12) NOT NULL DEFAULT '0',
  `Nivel` int(3) NOT NULL DEFAULT '0',
  `Tipo` int(11) NOT NULL DEFAULT '0',
  `PrecioProd` varchar(31) NOT NULL DEFAULT '3|4|4|4',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='El sistema de granjas para comprar';

-- --------------------------------------------------------

--
-- Table structure for table `muebles`
--

CREATE TABLE IF NOT EXISTS `muebles` (
  `ID` varchar(7) NOT NULL COMMENT 'Casa_ID',
  `Casa` int(3) NOT NULL,
  `Modelo` int(5) NOT NULL,
  `X` float NOT NULL,
  `Y` float NOT NULL,
  `Z` float NOT NULL,
  `RX` float NOT NULL DEFAULT '0',
  `RY` float NOT NULL DEFAULT '0',
  `RZ` float NOT NULL DEFAULT '0',
  `Activo` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `negocios`
--

CREATE TABLE IF NOT EXISTS `negocios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(64) NOT NULL,
  `Precio` int(12) NOT NULL,
  `Nivel` int(11) NOT NULL,
  `Propietario` varchar(24) NOT NULL,
  `Vendido` int(11) NOT NULL,
  `EX` float NOT NULL,
  `EY` float NOT NULL,
  `EZ` float NOT NULL,
  `SX` float NOT NULL,
  `SY` float NOT NULL,
  `SZ` float NOT NULL,
  `Tipo` int(11) NOT NULL,
  `EA` float NOT NULL,
  `SA` float NOT NULL,
  `INTerio` int(11) NOT NULL,
  `CX` float NOT NULL,
  `CY` float NOT NULL,
  `CZ` float NOT NULL,
  `p0` int(12) NOT NULL DEFAULT '200',
  `p1` int(12) NOT NULL DEFAULT '205',
  `p2` int(12) NOT NULL DEFAULT '230',
  `p3` int(12) NOT NULL DEFAULT '250',
  `p4` int(12) NOT NULL DEFAULT '145',
  `p5` int(12) NOT NULL DEFAULT '500',
  `p6` int(12) NOT NULL DEFAULT '400',
  `p7` int(12) NOT NULL DEFAULT '400',
  `p8` int(12) NOT NULL DEFAULT '50',
  `m0` int(12) NOT NULL DEFAULT '5',
  `m1` int(12) NOT NULL DEFAULT '7',
  `m2` int(12) NOT NULL DEFAULT '10',
  `m3` int(12) DEFAULT '6',
  `Dinero` int(20) NOT NULL DEFAULT '0',
  `PrecioSkin` int(13) NOT NULL DEFAULT '50',
  `id_user` int(8) NOT NULL DEFAULT '0',
  `PMuebles` varchar(518) NOT NULL DEFAULT '100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100,100',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registros`
--

CREATE TABLE IF NOT EXISTS `registros` (
  `hora` int(12) NOT NULL,
  `Comando` varchar(32) DEFAULT NULL,
  `target` varchar(200) DEFAULT NULL COMMENT 'razón o mas datos',
  `Nombre` varchar(24) DEFAULT NULL COMMENT 'nombre de usuario, admin o faccion',
  `tipolog` int(3) NOT NULL,
  `id` int(3) NOT NULL COMMENT 'id Usuario o faccion',
  `IDAdmin` int(1) DEFAULT NULL,
  `Razon` varchar(256) DEFAULT NULL,
  `PSerial` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_administracion`
--

CREATE TABLE IF NOT EXISTS `rp_administracion` (
  `id_user` int(4) NOT NULL,
  `Administrador` int(1) NOT NULL DEFAULT '0',
  `ActKey` varchar(32) NOT NULL,
  `Activa` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_advertencias`
--

CREATE TABLE IF NOT EXISTS `rp_advertencias` (
  `id_user` int(3) NOT NULL,
  `Warnings` int(2) NOT NULL DEFAULT '0',
  `NWarn` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_armas`
--

CREATE TABLE IF NOT EXISTS `rp_armas` (
  `id_user` int(11) NOT NULL,
  `a0` int(11) NOT NULL,
  `b0` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `b1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `a3` int(11) NOT NULL,
  `b3` int(11) NOT NULL,
  `a4` int(11) NOT NULL,
  `b4` int(11) NOT NULL,
  `a5` int(11) NOT NULL,
  `b5` int(11) NOT NULL,
  `a6` int(11) NOT NULL,
  `b6` int(11) NOT NULL,
  `a7` int(11) NOT NULL,
  `b7` int(11) NOT NULL,
  `a8` int(11) NOT NULL,
  `b8` int(11) NOT NULL,
  `a9` int(11) NOT NULL,
  `b9` int(11) NOT NULL,
  `a10` int(11) NOT NULL,
  `b10` int(11) NOT NULL,
  `a11` int(11) NOT NULL,
  `b11` int(11) NOT NULL,
  `a12` int(11) NOT NULL,
  `b12` int(11) NOT NULL,
  `PISTOL` int(11) NOT NULL DEFAULT '0',
  `SILENCED` int(11) NOT NULL DEFAULT '0',
  `DESERT` int(11) NOT NULL DEFAULT '0',
  `SHOTGUN` int(11) NOT NULL DEFAULT '0',
  `SAWNOFF` int(11) NOT NULL DEFAULT '0',
  `SPAS` int(11) NOT NULL DEFAULT '0',
  `UZI` int(11) NOT NULL DEFAULT '0',
  `MP5` int(11) NOT NULL DEFAULT '0',
  `AK47` int(11) NOT NULL DEFAULT '0',
  `M4` int(11) NOT NULL DEFAULT '0',
  `Sniper` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_auto`
--

CREATE TABLE IF NOT EXISTS `rp_auto` (
  `id_user` int(3) NOT NULL,
  `LlaveAuto` int(3) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_banco`
--

CREATE TABLE IF NOT EXISTS `rp_banco` (
  `id_user` int(3) NOT NULL,
  `Dinero` int(12) NOT NULL DEFAULT '0',
  `Clave` varchar(6) NOT NULL DEFAULT 'NULL',
  `Banco` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_bolsillos`
--

CREATE TABLE IF NOT EXISTS `rp_bolsillos` (
  `id_user` int(11) NOT NULL,
  `BolsilloD1` int(3) NOT NULL DEFAULT '0',
  `BolsilloD2` int(3) NOT NULL DEFAULT '0',
  `BolsilloI1` int(3) NOT NULL DEFAULT '0',
  `BolsilloI2` int(3) NOT NULL DEFAULT '0',
  `Izquierdo` int(3) NOT NULL DEFAULT '5' COMMENT '5. Por que empieza con dinero',
  `Derecho` int(3) NOT NULL DEFAULT '0',
  `ManoI` int(3) NOT NULL DEFAULT '0',
  `ManoD` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_carcel`
--

CREATE TABLE IF NOT EXISTS `rp_carcel` (
  `id_user` int(3) NOT NULL,
  `Encerrado` int(1) NOT NULL DEFAULT '0',
  `TiempoCarcel` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_casa`
--

CREATE TABLE IF NOT EXISTS `rp_casa` (
  `id_user` int(3) NOT NULL,
  `LlaveCasa` int(3) NOT NULL DEFAULT '0',
  `Actual` int(3) NOT NULL DEFAULT '0',
  `LlaveNegocio` int(11) NOT NULL DEFAULT '0',
  `Actual2` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_celular`
--

CREATE TABLE IF NOT EXISTS `rp_celular` (
  `id_user` int(4) NOT NULL,
  `Modelo` int(6) NOT NULL DEFAULT '0',
  `Numero` int(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_ciudadania`
--

CREATE TABLE IF NOT EXISTS `rp_ciudadania` (
  `id_user` int(3) NOT NULL,
  `CC` int(1) NOT NULL DEFAULT '0',
  `Nacimiento` int(4) NOT NULL DEFAULT '0',
  `Nacionalidad` varchar(32) NOT NULL DEFAULT 'Vacio',
  `Genero` varchar(6) NOT NULL DEFAULT 'Vacio',
  `Imagen` int(4) NOT NULL,
  `Expedicion` varchar(12) NOT NULL DEFAULT '0/0/0000',
  `Seguro` int(11) NOT NULL DEFAULT '0',
  `TipoSeguro` int(11) NOT NULL DEFAULT '0',
  `LICArmas` int(11) NOT NULL DEFAULT '0',
  `LICAuto` int(11) NOT NULL DEFAULT '0',
  `LICBote` int(11) NOT NULL DEFAULT '0',
  `LICAir` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_faccion`
--

CREATE TABLE IF NOT EXISTS `rp_faccion` (
  `id_user` int(3) NOT NULL,
  `Lider` int(2) NOT NULL DEFAULT '0',
  `Miembro` int(2) NOT NULL DEFAULT '0',
  `Rango` int(1) NOT NULL DEFAULT '0',
  `Trabajo` int(2) NOT NULL DEFAULT '0',
  `Semillas0` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_gps`
--

CREATE TABLE IF NOT EXISTS `rp_gps` (
  `ID` int(3) NOT NULL,
  `X` float NOT NULL,
  `Y` float NOT NULL,
  `Z` float NOT NULL,
  `Nombre` varchar(42) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_posicion`
--

CREATE TABLE IF NOT EXISTS `rp_posicion` (
  `id_user` int(3) NOT NULL,
  `CoordX` float NOT NULL DEFAULT '1727.99',
  `CoordY` float NOT NULL DEFAULT '-1602.32',
  `CoordZ` float DEFAULT '13.5468',
  `CoordA` float NOT NULL DEFAULT '181.522',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_trabajo`
--

CREATE TABLE IF NOT EXISTS `rp_trabajo` (
  `id_user` int(3) NOT NULL,
  `SkillDet` int(4) NOT NULL DEFAULT '0',
  `SkillTA` int(11) NOT NULL DEFAULT '0',
  `Granja` int(11) NOT NULL DEFAULT '0',
  `NotificarEmbargo` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_traficante`
--

CREATE TABLE IF NOT EXISTS `rp_traficante` (
  `id_user` int(3) NOT NULL,
  `Materiales` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_usuarios`
--

CREATE TABLE IF NOT EXISTS `rp_usuarios` (
  `id_user` int(4) NOT NULL COMMENT 'ID del usuario en la base de datos',
  `Nombre` varchar(24) NOT NULL COMMENT 'Nombre del usuario',
  `Clave` varchar(129) NOT NULL,
  `E_Mail` varchar(128) NOT NULL COMMENT 'Correo electronico.',
  `Vida` float NOT NULL DEFAULT '100' COMMENT 'Vida del jugador',
  `Nivel` int(3) NOT NULL DEFAULT '1' COMMENT 'Nivel del jugador',
  `Experiencia` int(11) NOT NULL DEFAULT '0' COMMENT 'Experiencia para subir de nivel',
  `Interior` int(1) NOT NULL DEFAULT '0' COMMENT 'Interior en el juego',
  `VirtualWorld` int(1) NOT NULL DEFAULT '0' COMMENT 'Virtual World en el juego',
  `Dinero` int(12) NOT NULL DEFAULT '500' COMMENT 'Dinero dentro del juego',
  `Expulsado` int(1) NOT NULL DEFAULT '0' COMMENT 'Si esta o no baneado',
  `Skin` int(3) NOT NULL,
  `Mute` int(4) NOT NULL DEFAULT '0',
  `Mascara` int(1) NOT NULL DEFAULT '0',
  `InfoMascara` varchar(186) NOT NULL DEFAULT '0,0,0,0,0,0,0,0,0,0',
  `DineroMulta` int(12) DEFAULT '0',
  `TiempoMulta` int(4) NOT NULL DEFAULT '-1',
  `CrimenRazon` varchar(128) NOT NULL DEFAULT '_',
  `CrimenAcusador` varchar(24) NOT NULL DEFAULT '_',
  `CantidadCrimen` int(1) NOT NULL DEFAULT '0',
  `CrimenIntensidad` int(4) NOT NULL,
  `Armadura` float NOT NULL DEFAULT '0',
  `BanRazon` varchar(144) NOT NULL,
  `OnOff` int(11) NOT NULL DEFAULT '0',
  `TimeDesBan` int(11) NOT NULL DEFAULT '0',
  `Serial` varchar(128) NOT NULL DEFAULT '0',
  `RegisterDate` int(11) NOT NULL,
  `IP` varchar(16) NOT NULL,
  `DateBan` int(11) NOT NULL DEFAULT '0',
  `TiempoJugado` int(12) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `Nombre_2` (`Nombre`),
  UNIQUE KEY `id_user` (`id_user`),
  KEY `Nombre_3` (`Nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_vehiculos`
--

CREATE TABLE IF NOT EXISTS `rp_vehiculos` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `Modelo` int(3) NOT NULL,
  `Precio` int(12) NOT NULL,
  `Propietario` varchar(24) NOT NULL,
  `VPosX` float NOT NULL,
  `VPosY` float NOT NULL,
  `VPosZ` float NOT NULL,
  `VPosA` float NOT NULL,
  `Colores` varchar(10) NOT NULL,
  `Matricula` varchar(11) NOT NULL,
  `VidaV` float NOT NULL DEFAULT '1000',
  `Modificaciones` varchar(100) NOT NULL,
  `Gasolina` int(4) NOT NULL DEFAULT '1000',
  `Bateria` int(4) NOT NULL DEFAULT '1000',
  `DanoVehiculo` varchar(256) NOT NULL,
  `LockV` int(1) NOT NULL,
  `Maleta` varchar(50) NOT NULL DEFAULT '0,0,0,0,0,0,0,0,0,0',
  `VFaccion` int(1) NOT NULL,
  `FixOFF` int(11) NOT NULL DEFAULT '0',
  `TipoCar` int(2) NOT NULL,
  `TrabajoCar` int(3) NOT NULL DEFAULT '0',
  `id_user` int(8) NOT NULL,
  `TrailerFarm` int(8) NOT NULL DEFAULT '0',
  `TractorFarm` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `web_afiliados`
--

CREATE TABLE IF NOT EXISTS `web_afiliados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `i_uid` int(11) NOT NULL DEFAULT '0',
  `a_uid` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL DEFAULT '0',
  `xd` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
