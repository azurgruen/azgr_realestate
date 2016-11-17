<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium',
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
        'searchFields' => 'name,street,street_number,zip,city,lat,lng,images,public_transport_suburban_line,public_transport_suburban_station,public_transport_metro_line,public_transport_metro_station,public_transport_tram_line,public_transport_tram_station,public_transport_bus_line,public_transport_bus_station,description,modernisation,contents,furnishings,contact_person,',
        'iconfile' => 'EXT:azgr_realestate/Resources/Public/Icons/condominium.png'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, street, street_number, zip, city, lat, lng, images, public_transport_suburban_line, public_transport_suburban_station, public_transport_metro_line, public_transport_metro_station, public_transport_tram_line, public_transport_tram_station, public_transport_bus_line, public_transport_bus_station, description, modernisation, contents, furnishings, contact_person',
    ],
    'palettes' => [
	    'location' => [
        	'showitem' => 'name, --linebreak--, street, street_number, --linebreak--, zip, city'
        ],
        'coords' => [
        	'showitem' => 'lat, lng'
        ],
        'public_transport' => [
	        'showitem' => 'public_transport_suburban_line, public_transport_suburban_station, --linebreak--, public_transport_metro_line, public_transport_metro_station, --linebreak--, public_transport_tram_line, public_transport_tram_station, --linebreak--, public_transport_bus_line, public_transport_bus_station'
        ]
    ],
    'types' => [
        '1' => [
        	'showitem' => 
        		'sys_language_uid, l10n_parent, l10n_diffsource, hidden, 
	        	--div--;Allgemein,
	        	--palette--;Anschrift;location, 
	        	--palette--;Koordinaten;coords,
	        	images, 
	        	--div--;Anfahrt,
	        	--palette--;ÖPNV;public_transport, 
	        	--div--;Beschreibung, description, modernisation,
	        	--div--;Merkmale, contents, furnishings,
	        	--div--;Ansprechpartner, contact_person,
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
                'foreign_table' => 'tx_azgrrealestate_domain_model_condominium',
                'foreign_table_where' => 'AND tx_azgrrealestate_domain_model_condominium.pid=###CURRENT_PID### AND tx_azgrrealestate_domain_model_condominium.sys_language_uid IN (-1,0)',
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
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'street' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.street',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'street_number' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.street_number',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'zip' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.zip',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'city' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.city',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'lat' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.lat',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'readOnly' => true
			]
	        
	    ],
	    'lng' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.lng',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'readOnly' => true
			]
	        
	    ],
	    'images' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.images',
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
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.public_transport_suburban_line',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_suburban_station' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.public_transport_suburban_station',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_metro_line' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.public_transport_metro_line',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_metro_station' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.public_transport_metro_station',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_tram_line' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.public_transport_tram_line',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_tram_station' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.public_transport_tram_station',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_bus_line' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.public_transport_bus_line',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'public_transport_bus_station' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.public_transport_bus_station',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'description' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.description',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	        
	    ],
	    'modernisation' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.modernisation',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	        
	    ],
	    'contents' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.contents',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim',
			],
	        'defaultExtras' => 'richtext:rte_transform[mode=ts_css]'
	    ],
	    'furnishings' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.furnishings',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim',
			],
	        'defaultExtras' => 'richtext:rte_transform[mode=ts_css]'
	    ],
	    'contact_person' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:azgr_realestate/Resources/Private/Language/locallang_db.xlf:tx_azgrrealestate_domain_model_condominium.contact_person',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectMultipleSideBySide',
			    'foreign_table' => 'tx_azgrstaff_domain_model_member',
			    'MM' => 'tx_azgrrealestate_condominium_member_mm',
			    'size' => 10,
			    'autoSizeMax' => 30,
			    'maxitems' => 9999,
			    'multiple' => 0,
			    'wizards' => [
			        '_PADDING' => 1,
			        '_VERTICAL' => 1,
			        'edit' => [
			            'module' => [
			                'name' => 'wizard_edit',
			            ],
			            'type' => 'popup',
			            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
			            'popup_onlyOpenIfSelected' => 1,
			            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
			        ],
			        'add' => [
			            'module' => [
			                'name' => 'wizard_add',
			            ],
			            'type' => 'script',
			            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
			            'params' => [
			                'table' => 'tx_azgrstaff_domain_model_member',
			                'pid' => '###CURRENT_PID###',
			                'setValue' => 'prepend'
			            ],
			        ],
			    ],
			],

	    ],
        
    ],
];
