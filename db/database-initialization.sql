create table userlevels (
	id serial primary key,
	userlevel integer unique check (userlevel < 4),
	leveldesc varchar(64) not null,
	creationdate timestamptz not null
);

create index idx_userlevel on userlevels(id, userlevel);

create table regions (
	id serial primary key,
	regionname varchar(64) not null,
	creationdate timestamptz not null	
);

create index idx_region on regions(id, regionname);

create table provinces (
	id serial primary key,
	provincename varchar(64) not null,
	regionid integer references regions(id) on delete restrict,
	creationdate timestamptz not null	
);

create index idx_province on provinces(id, provincename);

create table citymunicipality (
	id serial primary key,
	towncitymunicipalityname varchar(64) not null,
	iscity boolean default false not null,
	provinceid integer default null references provinces(id) on delete restrict,
	creationdate timestamptz not null
);

create index idx_citymunicipality on citymunicipality(id, towncitymunicipalityname);

create table barangays (
	id serial primary key,
	barangayname varchar(64) not null,
	citymunicipalityid integer references citymunicipality(id) on delete restrict,
	creationdate timestamptz not null
);

create index idx_barangay on barangays(id, barangayname);

create table systemusers (
	id serial primary key,
	lastname varchar(64) not null,
	firstname varchar(64) not null,
	midname varchar(5) default null,
	extname varchar(5) default null,
	position varchar(64) default null,
	contactlandline varchar(128) default null,
	contactmobile varchar(128) default null,
	contactemail varchar(128) default null,
	provinceid integer default null references provinces(id) on delete restrict,
	citymunicipalityid integer default null references citymunicipality(id) on delete restrict,
	barangayid integer default null references barangays(id) on delete restrict,
	usrname varchar(128) unique not null,
	usrpassword varchar(128) not null,
	usrpasswdsalt varchar(128) not null,
	userlevelid integer default 1 references userlevels(userlevel) on delete restrict check(userlevelid < 4),
	isapproved boolean default false,
	approvedby integer default null references systemusers(id) on delete restrict,
	approveddate timestamptz default null,
	createdby integer default null references systemusers(id) on delete restrict,
	creationdate timestamptz default null
);

create index idx_systemuser on systemusers(id, lastname, firstname, midname, extname, usrname, usrpassword);

