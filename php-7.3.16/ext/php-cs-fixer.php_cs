<?php

return PhpCsFixer\Config::create()
    ->setRules(array(
        '@PSR2' => true,
        '@Symfony' => true,
        'blank_line_before_statement' => array(),
        'braces' => array(
            'allow_single_line_closure' => true,
            'position_after_anonymous_constructs' => 'same',
            'position_after_control_structures' => 'same',
            'position_after_functions_and_oop_constructs' => 'same',
        ),
        'concat_space' => array('spacing' => 'one'),
        'declare_equal_normalize' => array('space' => 'single'),
		'doctrine_annotation_braces' => array('syntax' => 'with_braces'),
		'increment_style' => array('style' => 'post'),
		'phpdoc_types_order' => array(
			'null_adjustment' => 'always_last',
		),
		'semicolon_after_instruction' => false,	//can configurable
    ))
    ->setIndent("    ")
    ->setLineEnding("\r\n")
	->setCacheFile(__DIR__.'/.php_cs.cache')
;