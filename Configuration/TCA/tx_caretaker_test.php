<?php

$GLOBALS['TCA']['tx_caretaker_test'] = array(
    'ctrl' => array(
        'title' => 'LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY title',
        'delete' => 'deleted',
        'rootLevel' => -1,
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
            'fe_group' => 'fe_group',
        ),
        'iconfile' => 'EXT:caretaker/res/icons/test.png',
        'searchFields' => 'title, description',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,starttime,endtime,fe_group,title,description,test_interval,test_interval_start_hour,test_interval_stop_hour,test_service,test_conf,test_retry,test_due,roles,groups,instances',
    ),
    'columns' => array(
        'hidden' => array(
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
                'default' => '0',
            ),
        ),
        'starttime' => array(
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => '8',
                'eval' => 'date',
                'default' => '0',
                'renderType' => 'inputDateTime',
            ),
        ),
        'endtime' => array(
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => '8',
                'eval' => 'date',
                'default' => '0',
                'range' => array(
                    'upper' => mktime(0, 0, 0, 12, 31, 2020),
                    'lower' => mktime(0, 0, 0, date('m') - 1, date('d'), date('Y')),
                ),
                'renderType' => 'inputDateTime',
            ),
        ),
        'fe_group' => array(
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                    array('LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login', -1),
                    array('LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login', -2),
                    array('LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups', '--div--'),
                ),
                'foreign_table' => 'fe_groups',
                'renderType' => 'selectSingle',
            ),
        ),
        'title' => array(
            'label' => 'LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.title',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            ),
        ),
        'description' => array(
            'label' => 'LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.description',
            'config' => array(
                'type' => 'text',
                'cols' => '50',
                'rows' => '5',
                'enableRichtext' => true,
            ),
        ),
        'test_interval' => array(
            'label' => 'LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_interval',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('always', 0),
                    array('1 Minute', 60),
                    array('5 Minutes', 300),
                    array('10 Minutes', 600),
                    array('15 Minutes', 900),
                    array('20 Minutes', 1200),
                    array('30 Minutes', 1800),
                    array('45 Minutes', 2700),
                    array('1 Hour', 3600),
                    array('2 Hours', 7200),
                    array('4 Hours', 14400),
                    array('8 Hours', 28800),
                    array('10 Hours', 36000),
                    array('12 Hours', 43200),
                    array('1 Day', 86400),
                    array('2 Days', 172800),
                    array('3 Days', 259200),
                    array('4 Days', 345600),
                    array('5 Days', 432000),
                    array('6 Days', 518400),
                    array('1 Week', 604800),
                    array('2 Weeks', 1209600),
                    array('4 Weeks', 2419200),
                ),
                'default' => 0,
            ),
        ),
        'test_interval_start_hour' => array(
            'label' => 'LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_interval_start_hour',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('', 0),
                    array(1, 1),
                    array(2, 2),
                    array(3, 3),
                    array(4, 4),
                    array(5, 5),
                    array(6, 6),
                    array(7, 7),
                    array(8, 8),
                    array(9, 9),
                    array(10, 10),
                    array(11, 11),
                    array(12, 12),
                    array(13, 13),
                    array(14, 14),
                    array(15, 15),
                    array(16, 16),
                    array(17, 17),
                    array(18, 18),
                    array(19, 19),
                    array(20, 20),
                    array(21, 21),
                    array(22, 22),
                    array(23, 23),
                    array(24, 24),
                ),
            ),
        ),
        'test_interval_stop_hour' => array(
            'label' => 'LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_interval_stop_hour',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('', 0),
                    array(1, 1),
                    array(2, 2),
                    array(3, 3),
                    array(4, 4),
                    array(5, 5),
                    array(6, 6),
                    array(7, 7),
                    array(8, 8),
                    array(9, 9),
                    array(10, 10),
                    array(11, 11),
                    array(12, 12),
                    array(13, 13),
                    array(14, 14),
                    array(15, 15),
                    array(16, 16),
                    array(17, 17),
                    array(18, 18),
                    array(19, 19),
                    array(20, 20),
                    array(21, 21),
                    array(22, 22),
                    array(23, 23),
                    array(24, 24),
                ),
            ),
        ),
        'test_service' => array(
            'label' => 'LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_service',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array_merge(
                    array(
                        0 => array('LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_service.select_service', ''),
                    ),
                    \tx_caretaker_ServiceHelper::getTcaTestServiceItems()
                ),
                'size' => 1,
                'maxitems' => 1,
            ),
            'onChange' => 'reload',
        ),
        'test_conf' => array(
            'displayCond' => 'FIELD:test_service:REQ:true',
            'label' => 'LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_conf',
            'config' => array(
                'type' => 'flex',
                'ds_pointerField' => 'test_service',
                'ds' => \tx_caretaker_ServiceHelper::getTcaTestConfigDs(),
            ),
        ),
        'test_retry' => array(
            'label' => 'LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_retry',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    0 => array('LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_retry_0', 0),
                    2 => array('LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_retry_1', 1),
                    3 => array('LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_retry_2', 2),
                    4 => array('LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_retry_3', 3),
                    5 => array('LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_retry_4', 4),
                    6 => array('LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_retry_5', 5),
                ),
                'size' => 1,
                'maxitems' => 1,
                'default' => 0,
            ),
        ),
        'test_due' => array(
            'label' => 'LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.test_due',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'roles' => array(
            'label' => 'LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.roles',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_caretaker_roles',
                'size' => 5,
                'autoSizeMax' => 25,
                'minitems' => 0,
                'maxitems' => 100,
                'MM' => 'tx_caretaker_test_roles_mm',
            ),
        ),
        'groups' => array(
            'label' => 'LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.groups',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_caretaker_testgroup',
                'size' => 5,
                'autoSizeMax' => 25,
                'minitems' => 0,
                'maxitems' => 50,
                'MM' => 'tx_caretaker_testgroup_test_mm',
            ),
        ),
        'instances' => array(
            'label' => 'LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.instances',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_caretaker_instance',
                'size' => 5,
                'autoSizeMax' => 25,
                'minitems' => 0,
                'maxitems' => 10000,
                'MM' => 'tx_caretaker_instance_test_mm',
            ),
        ),
    ),
    'types' => array(
        '0' => array(
            'showitem' => '
                test_service, 
                hidden,
                --palette--;;1,
                title,
                test_interval, 
                --palette--;;2,
                test_retry, 
                test_due,
                test_conf,
                --div--;LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.tab.description, 
                    description,
				--div--;LLL:EXT:caretaker/locallang_db.xml:tx_caretaker_test.tab.notifications, 
				    roles,
                    --palette--;Groups and Instances;3
            ',
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => 'starttime,endtime,fe_group'),
        '2' => array('showitem' => 'test_interval_start_hour,test_interval_stop_hour'),
        '3' => array('showitem' => 'groups,instances', 'isHiddenPalette' => true),
    ),
);
