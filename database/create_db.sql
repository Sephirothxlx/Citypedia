CREATE TABLE State(
	statename varchar(30),
    abbreviation varchar(10),
    PRIMARY KEY (statename)
);

CREATE TABLE City(
	statename varchar(30),
    cityname varchar(30),
	latitude varchar(20),
    longitude varchar(20),
    abstract text,
    PRIMARY KEY (statename,cityname)
);

CREATE TABLE Climate(
	statename varchar(30),
    cityname varchar(30),
    hightemperature int,
    lowtemperature int,
    avgtemperature double,
    precipitation float,
    weatherstatus varchar(20),
	itsyear int,
    itsmonth int,
    itsday int,
    PRIMARY KEY(statename,cityname,itsyear,itsmonth,itsday)
);

CREATE TABLE Viewpoint(
	statename varchar(30),
    cityname varchar(30),
    viewname varchar(50),
    type varchar(20),
    abstract text,
    PRIMARY KEY (cityname,viewname)
);

CREATE TABLE Population(
    statename varchar(30),
    cityname varchar(30),
    population int,
    itsyear int,
    PRIMARY KEY (statename,cityname,itsyear)
);

CREATE TABLE Economics(
    statename varchar(30),
    cityname varchar(30),
    gdppc int,
    itsyear int,
    PRIMARY KEY (statename,cityname,itsyear)
);

CREATE TABLE Airport(
	statename varchar(30),
    cityname varchar(30),
    airportname varchar(60),
    PRIMARY KEY (statename,cityname,airportname)
);

CREATE TABLE College(
	statename varchar(30),
    cityname varchar(30),
    collegename varchar(60),
    type varchar(10),
    PRIMARY KEY (statename,cityname,collegename)
);

CREATE TABLE Museum(
	statename varchar(30),
    cityname varchar(30),
    museumname varchar(60),
    type varchar(10),
    PRIMARY KEY (statename,cityname,museumname)
);
	
CREATE TABLE Sportteam(
	statename varchar(30),
    cityname varchar(30),
	teamname varchar(20),
    type varchar(20),
    PRIMARY KEY (statename,cityname,teamname)
);