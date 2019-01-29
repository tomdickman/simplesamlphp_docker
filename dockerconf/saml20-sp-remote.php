<?php
$metadata['http://localhost/auth/saml2/sp/metadata.php'] = [
    'entityid'                 => 'http://localhost/auth/saml2/sp/metadata.php',
    'description'              => ['en' => 'Moodle'],
    'OrganizationName'         => ['en' => 'Moodle'],
    'name'                     => ['en' => 'Moodle'],
    'OrganizationDisplayName'  => ['en' => 'Moodle'],
    'url'                      => ['en' => 'http://localhost'],
    'OrganizationURL'          => ['en' => 'http://localhost'],
    'contacts'                 => [
        [
            'contactType'  => 'technical',
            'givenName'    => 'Admin',
            'surName'      => 'User',
            'emailAddress' => ['noreply@moodle.test'],
        ],
    ],
    'metadata-set'             => 'saml20-sp-remote',
    'AssertionConsumerService' =>
        [
            [
                'Binding'  => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                'Location' => 'http://localhost/auth/saml2/sp/saml2-acs.php/localhost',
                'index'    => 0,
            ],
            [
                'Binding'  => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
                'Location' => 'http://localhost/auth/saml2/sp/saml1-acs.php/localhost',
                'index'    => 1,
            ],
            [
                'Binding'  => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
                'Location' => 'http://localhost/auth/saml2/sp/saml2-acs.php/localhost',
                'index'    => 2,
            ],
            [
                'Binding'  => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
                'Location' => 'http://localhost/auth/saml2/sp/saml1-acs.php/localhost',
                'index'    => 3,
            ],
        ],
    'SingleLogoutService'      =>
        [
            [
                'Binding'  => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                'Location' => 'http://localhost/auth/saml2/sp/saml2-logout.php/localhost',
            ],
        ],
];
