<?php
$config = array(
    'example-userpass' => array(
        'exampleauth:UserPass',
        'student:studentpass' => array(
            'uid' => array('student_a'),
            'firstname' => array('Student'),
            'surname' => array('Alpha'),
            'email' => array('studenta@saml.test'),
            'lang' => array('en'),
        ),
        'employee:employeepass' => array(
            'uid' => array('employee'),
            'firstname' => array('Employee'),
            'surname' => array('Doe'),
            'email' => array('employee@saml.test'),
            'lang' => array('en'),
        ),
    ),
);