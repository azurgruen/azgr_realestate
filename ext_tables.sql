#
# Table structure for table 'tx_azgrrealestate_domain_model_condominium'
#
CREATE TABLE tx_azgrrealestate_domain_model_condominium (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	street varchar(255) DEFAULT '' NOT NULL,
	street_number varchar(255) DEFAULT '' NOT NULL,
	zip varchar(255) DEFAULT '' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
	lat double(11,6) DEFAULT '0.000000' NOT NULL,
	lng double(11,6) DEFAULT '0.000000' NOT NULL,
	images int(11) unsigned DEFAULT '0' NOT NULL,
	public_transport_suburban_line varchar(255) DEFAULT '' NOT NULL,
	public_transport_suburban_station varchar(255) DEFAULT '' NOT NULL,
	public_transport_metro_line varchar(255) DEFAULT '' NOT NULL,
	public_transport_metro_station varchar(255) DEFAULT '' NOT NULL,
	public_transport_tram_line varchar(255) DEFAULT '' NOT NULL,
	public_transport_tram_station varchar(255) DEFAULT '' NOT NULL,
	public_transport_bus_line varchar(255) DEFAULT '' NOT NULL,
	public_transport_bus_station varchar(255) DEFAULT '' NOT NULL,
	description text NOT NULL,
	modernisation text NOT NULL,
	contents text NOT NULL,
	furnishings text NOT NULL,
	contact_person int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_azgrrealestate_domain_model_apartment'
#
CREATE TABLE tx_azgrrealestate_domain_model_apartment (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	navtitle varchar(255) DEFAULT '' NOT NULL,
	street varchar(255) DEFAULT '' NOT NULL,
	street_number varchar(255) DEFAULT '' NOT NULL,
	zip varchar(255) DEFAULT '' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
	lat double(11,6) DEFAULT '0.000000' NOT NULL,
	lng double(11,6) DEFAULT '0.000000' NOT NULL,
	images int(11) unsigned DEFAULT '0' NOT NULL,
	public_transport_suburban_line varchar(255) DEFAULT '' NOT NULL,
	public_transport_suburban_station varchar(255) DEFAULT '' NOT NULL,
	public_transport_metro_line varchar(255) DEFAULT '' NOT NULL,
	public_transport_metro_station varchar(255) DEFAULT '' NOT NULL,
	public_transport_tram_line varchar(255) DEFAULT '' NOT NULL,
	public_transport_tram_station varchar(255) DEFAULT '' NOT NULL,
	public_transport_bus_line varchar(255) DEFAULT '' NOT NULL,
	public_transport_bus_station varchar(255) DEFAULT '' NOT NULL,
	rent_base double(11,2) DEFAULT '0.00' NOT NULL,
	rent_addition double(11,2) DEFAULT '0.00' NOT NULL,
	rent_total double(11,2) DEFAULT '0.00' NOT NULL,
	rent_deposit double(11,2) DEFAULT '0.00' NOT NULL,
	count_rooms int(11) DEFAULT '1' NOT NULL,
	label_room_1 varchar(255) DEFAULT '' NOT NULL,
	label_room_2 varchar(255) DEFAULT '' NOT NULL,
	label_room_3 varchar(255) DEFAULT '' NOT NULL,
	label_room_4 varchar(255) DEFAULT '' NOT NULL,
	label_room_5 varchar(255) DEFAULT '' NOT NULL,
	label_room_6 varchar(255) DEFAULT '' NOT NULL,
	label_room_7 varchar(255) DEFAULT '' NOT NULL,
	label_room_8 varchar(255) DEFAULT '' NOT NULL,
	label_room_9 varchar(255) DEFAULT '' NOT NULL,
	label_room_10 varchar(255) DEFAULT '' NOT NULL,
	label_room_11 varchar(255) DEFAULT '' NOT NULL,
	label_room_12 varchar(255) DEFAULT '' NOT NULL,
	label_room_13 varchar(255) DEFAULT '' NOT NULL,
	label_room_14 varchar(255) DEFAULT '' NOT NULL,
	label_room_15 varchar(255) DEFAULT '' NOT NULL,
	label_room_16 varchar(255) DEFAULT '' NOT NULL,
	label_room_17 varchar(255) DEFAULT '' NOT NULL,
	label_room_18 varchar(255) DEFAULT '' NOT NULL,
	label_room_19 varchar(255) DEFAULT '' NOT NULL,
	label_room_20 varchar(255) DEFAULT '' NOT NULL,
	sqm_room_1 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_2 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_3 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_4 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_5 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_6 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_7 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_8 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_9 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_10 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_11 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_12 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_13 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_14 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_15 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_16 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_17 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_18 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_19 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_room_20 double(11,2) DEFAULT '0.00' NOT NULL,
	sqm_total double(11,2) DEFAULT '0.00' NOT NULL,
	description text NOT NULL,
	misc text NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_azgrrealestate_condominium_member_mm'
#
CREATE TABLE tx_azgrrealestate_condominium_member_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
