<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment',
        'label' => 'name',
        'default_sortby' => 'ORDER BY name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => 1,
		'versioningWS' => 2,
        'versioning_followPages' => true,

        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
        'enablecolumns' => [
			'disabled' => 'hidden',
			'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'name,street,street_number,zip,city,lat,lng,images,public_transport_suburban_line,public_transport_suburban_station,public_transport_metro_line,public_transport_metro_station,public_transport_tram_line,public_transport_tram_station,public_transport_bus_line,public_transport_bus_station,rent_base,rent_addition,rent_total,rent_deposit,sqm_total,description,misc,',
        'iconfile' => 'EXT:azgr_realestate/Resources/Public/Icons/apartment.png'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, street, street_number, zip, city, lat, lng, images, public_transport_suburban_line, public_transport_suburban_station, public_transport_metro_line, public_transport_metro_station, public_transport_tram_line, public_transport_tram_station, public_transport_bus_line, public_transport_bus_station, rent_base, rent_addition, rent_total, rent_deposit, sqm_total, description, misc',
    ],
    'palettes' => [
	    'name' => [
		    'showitem' => 'name, navtitle'
	    ],
	    'location' => [
        	'showitem' => 'street, street_number, --linebreak--, zip, city'
        ],
	    'coords' => [
        	'showitem' => 'lat, lng'
        ],
        'public_transport' => [
	        'showitem' => 'public_transport_suburban_line, public_transport_suburban_station, --linebreak--, public_transport_metro_line, public_transport_metro_station, --linebreak--, public_transport_tram_line, public_transport_tram_station, --linebreak--, public_transport_bus_line, public_transport_bus_station'
        ],
        'rooms' => [
        	'showitem' => 
        		'label_room_1, sqm_room_1, --linebreak--,
        		label_room_2, sqm_room_2, --linebreak--,
        		label_room_3, sqm_room_3, --linebreak--,
        		label_room_4, sqm_room_4, --linebreak--,
        		label_room_5, sqm_room_5, --linebreak--,
        		label_room_6, sqm_room_6, --linebreak--,
        		label_room_7, sqm_room_7, --linebreak--,
        		label_room_8, sqm_room_8, --linebreak--,
        		label_room_9, sqm_room_9, --linebreak--,
        		label_room_10, sqm_room_10, --linebreak--,
        		label_room_11, sqm_room_11, --linebreak--,
        		label_room_12, sqm_room_12, --linebreak--,
        		label_room_13, sqm_room_13, --linebreak--,
        		label_room_14, sqm_room_14, --linebreak--,
        		label_room_15, sqm_room_15, --linebreak--,
        		label_room_16, sqm_room_16, --linebreak--,
        		label_room_17, sqm_room_17, --linebreak--,
        		label_room_18, sqm_room_18, --linebreak--,
        		label_room_19, sqm_room_19, --linebreak--,
        		label_room_20, sqm_room_20, --linebreak--'
        ]
    ],
    'types' => [
        '1' => [
        	'showitem' => 
	        	'sys_language_uid, l10n_parent, l10n_diffsource, hidden, 
	        	--div--;Allgemein,
	        	--palette--;Bezeichnung;name,
	        	--palette--;Anschrift;location, 
	        	--palette--;Koordinaten;coords,
	        	images, 
	        	--div--;Anfahrt,
	        	--palette--;ÖPNV;public_transport,
	        	--div--;Miete, rent_base, rent_addition, rent_total, rent_deposit, 
	        	--div--;Fläche/Zimmer, count_rooms, sqm_total,
	        	--palette--;Zimmer;rooms,
	        	--div--;Sonstiges, description, misc,
	        	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages'
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_azgrrealestate_domain_model_apartment',
                'foreign_table_where' => 'AND tx_azgrrealestate_domain_model_apartment.pid=###CURRENT_PID### AND tx_azgrrealestate_domain_model_apartment.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],
        'endtime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],
        
	    'name' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'navtitle' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.navtitle',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'street' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.street',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'street_number' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.street_number',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'trim'
			],
	        
	    ],
	    'zip' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.zip',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'trim'
			],
	        
	    ],
	    'city' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.city',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'lat' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.lat',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'readOnly' => true
			]
	        
	    ],
	    'lng' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.lng',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'readOnly' => true
			]
	        
	    ],
	    'images' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.images',
	        'config' => 
			\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			    'images',
			    [
			        'appearance' => [
			            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
			        ],
			        'foreign_types' => [
			            '0' => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ]
			        ],
			        'maxitems' => 10
			    ],
			    $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),

	    ],
	    'public_transport_suburban_line' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.public_transport_suburban_line',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_suburban_station' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.public_transport_suburban_station',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_metro_line' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.public_transport_metro_line',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_metro_station' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.public_transport_metro_station',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_tram_line' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.public_transport_tram_line',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_tram_station' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.public_transport_tram_station',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_bus_line' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.public_transport_bus_line',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_bus_station' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.public_transport_bus_station',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'rent_base' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.rent_base',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'double2'
			]
	        
	    ],
	    'rent_addition' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.rent_addition',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'double2'
			]
	        
	    ],
	    'rent_total' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.rent_total',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    //'readOnly' => true
			]
	        
	    ],
	    'rent_deposit' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.rent_deposit',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'double2'
			]
	        
	    ],
		'count_rooms' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.count_rooms',
	        'config' => [
			    'type' => 'select',
			    //'default' => 1,
			    //'size' => 10,
			    //'eval' => 'int',
			    'items' => [
					['1', 1],
					['2', 2],
					['3', 3],
					['4', 4],
					['5', 5],
					['6', 6],
					['7', 7],
					['8', 8],
					['9', 9],
					['10', 10],
					['11', 11],
					['12', 12],
					['13', 13],
					['14', 14],
					['15', 15],
					['16', 16],
					['17', 17],
					['18', 18],
					['19', 19],
					['20', 20]
				]
			]
	    ],
	    'label_room_1' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_1' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_2' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:1',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
	    'sqm_room_2' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:1',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_3' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:2',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
	    'sqm_room_3' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:2',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_4' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:3',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_4' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:3',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_5' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:4',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_5' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:4',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_6' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:5',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_6' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:5',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_7' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:6',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_7' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:6',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_8' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:7',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_8' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:7',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_9' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:8',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_9' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:8',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_10' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:9',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_10' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:9',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_11' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:10',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_11' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:10',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_12' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:11',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_12' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:11',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_13' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:12',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_13' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:12',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_14' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:13',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_14' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:13',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_15' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:14',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_15' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:14',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_16' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:15',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_16' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:15',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_17' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:16',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_17' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:16',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_18' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:17',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_18' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:17',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_19' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:18',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_19' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:18',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'label_room_20' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:19',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.label_room',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			]
	    ],
		'sqm_room_20' => [
	        'exclude' => 0,
	        'displayCond' => 'FIELD:count_rooms:>:19',
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'double2'
			]
	    ],
	    'sqm_total' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.sqm_total',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'default' => 0.00,
			    'eval' => 'double2'
			    //'readOnly' => true
			]
	        
	    ],
	    'description' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.description',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	        
	    ],
	    'misc' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_apartment.misc',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	        
	    ],
        
    ],
];
