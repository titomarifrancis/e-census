create table [if not exists] userlevels (
	id serial primary key,
	userlevel integer unique check (userlevel < 4),
	leveldesc varchar(64) not null,
	creationdate timestamptz not null
);

create index idx_userlevel on userlevels(id, userlevel);

create table [if not exists] regions (
	id serial primary key,
	regionname varchar(64) not null,
	creationdate timestamptz not null	
);

create index idx_region on regions(id, regionname);

create table [if not exists] provinces (
	id serial primary key,
	provincename varchar(64) not null,
	regionid integer references regions(id) on delete restrict,
	creationdate timestamptz not null	
);

create index idx_province on provinces(id, provincename);

create table [if not exists] citymunicipality (
	id serial primary key,
	towncitymunicipalityname varchar(64) not null,
	iscity boolean default false not null,
	provinceid integer default null references provinces(id) on delete restrict,
	creationdate timestamptz not null
);

create index idx_citymunicipality on citymunicipality(id, towncitymunicipalityname);

create table [if not exists] barangays (
	id serial primary key,
	barangayname varchar(64) not null,
	citymunicipalityid integer references citymunicipality(id) on delete restrict,
	creationdate timestamptz not null
);

create index idx_barangay on barangays(id, barangayname);

create table [if not exists] genders (
	id serial primary key,
	genderdesc varchar(64) not null,
	creationdate timestamptz not null
);

create index idx_gender on genders(id,genderdesc);

create table [if not exists] civstatus (
  id serial primary key,
  civstatusdesc varchar(32) not null
);

create table [if not exists] users (
	id serial primary key,
	lastname varchar(64) not null,
	firstname varchar(64) not null,
	midname varchar(5) default null,
	extname varchar(5) default null,
	birthdate date default null,
	contactlandline varchar(128) default null,
	contactmobile varchar(128) default null,
	contactemail varchar(128) default null,
	genderId integer default null references genders(id) on delete restrict,
	civstatusId integer default null references civstatus(id) on delete restrict,
	usrname varchar(128) unique not null,
	usrpassword varchar(128) not null,
	usrpasswdsalt varchar(128) not null,
	userlevelid integer default 1 references userlevels(userlevel) on delete restrict check(userlevelid < 4),
	isapproved boolean default false,
	approvedby integer default null references users(id) on delete restrict,
	approveddate timestamptz default null,
	createdby integer default null references users(id) on delete restrict,
	creationdate timestamptz default null
);

create index idx_user on users(id, lastname, firstname, midname, extname, usrname, usrpassword);

create table [if not exists] useraddress (
	id serial primary key,
	userId integer not null references users(id) on delete restrict,
	provinceid integer default null references provinces(id) on delete restrict,
	citymunicipalityid integer default null references citymunicipality(id) on delete restrict,
	barangayid integer default null references barangays(id) on delete restrict,
	streetname varchar(64) default null,
	doorfloorbldghousenumber varchar(128) default null,
	creationdate timestamptz default null	
);
