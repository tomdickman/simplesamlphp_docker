<?php
$metadata['https://192.172.0.5:8443/auth/saml2/sp/metadata.php'] = array (
  'entityid' => 'https://192.172.0.5:8443/auth/saml2/sp/metadata.php',
  'description' => 
  array (
    'en' => 'test',
  ),
  'OrganizationName' => 
  array (
    'en' => 'test',
  ),
  'name' => 
  array (
    'en' => 'Test',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'Test',
  ),
  'url' => 
  array (
    'en' => 'https://192.172.0.5:8443',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'https://192.172.0.5:8443',
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'Admin',
      'surName' => 'User',
      'emailAddress' => 
      array (
        0 => 'noreply@192.172.0.5',
      ),
    ),
  ),
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://192.172.0.5:8443/auth/saml2/sp/saml2-acs.php/192.172.0.5',
      'index' => 0,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
      'Location' => 'https://192.172.0.5:8443/auth/saml2/sp/saml1-acs.php/192.172.0.5',
      'index' => 1,
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://192.172.0.5:8443/auth/saml2/sp/saml2-acs.php/192.172.0.5',
      'index' => 2,
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
      'Location' => 'https://192.172.0.5:8443/auth/saml2/sp/saml1-acs.php/192.172.0.5',
      'index' => 3,
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://192.172.0.5:8443/auth/saml2/sp/saml2-logout.php/192.172.0.5',
    ),
  ),
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => '
MIID1zCCAr+gAwIBAgIBADANBgkqhkiG9w0BAQsFADCBhTEPMA0GA1UEAwwGbW9vZGxlMQswCQYDVQQGEwJBVTEUMBIGA1UEBwwLbW9vZGxldmlsbGUxHjAcBgkqhkiG9w0BCQEWD2FkbWluQGVtYWlsLmNvbTENMAsGA1UECgwEdGVzdDEPMA0GA1UECAwGbW9vZGxlMQ8wDQYDVQQLDAZtb29kbGUwHhcNMTkwMTMxMDQwMDI5WhcNMjkwMTI4MDQwMDI5WjCBhTEPMA0GA1UEAwwGbW9vZGxlMQswCQYDVQQGEwJBVTEUMBIGA1UEBwwLbW9vZGxldmlsbGUxHjAcBgkqhkiG9w0BCQEWD2FkbWluQGVtYWlsLmNvbTENMAsGA1UECgwEdGVzdDEPMA0GA1UECAwGbW9vZGxlMQ8wDQYDVQQLDAZtb29kbGUwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCtdgllDmiZM1fzOwTfpHChmdCFu0a//kJ0wQco7bN9TNO0SKWj8KYcAMIfQS4muiOEONmHpc07yPUfvMjeA5nq5EJscqudaiRq6XkfCWaoT2BeL42DIZRh36S0AwWZ6//OYeapcdvagstI7wTPBLCjKQdJ2k5NbyG9dH/Q7mISw1YFBy/e6CspHWl27wf9NTvoiOpccbSNvSX0gvpn7yKu6cB6FP7Lnltf3TK3qj0tUKtlplBdvVC/Km3a2p2S8t5nhSt5dbymCVsgsSNEvQOre30h5RnXx6nBlm/wkQR5L+L6V2FgPqIj/e6e+/cwzSDIZ+gNalPvW/Tx/JmjCvYdAgMBAAGjUDBOMB0GA1UdDgQWBBTTU3AumsDZuz5gZOd/bAbktN5SdTAfBgNVHSMEGDAWgBTTU3AumsDZuz5gZOd/bAbktN5SdTAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBAQB+feS/8Gc+V5XFBNUC1aBHAQMR2iHP6XlWU5sDugQUdS0d6aTwukI7/8q0p1/8EtgDFiVSp89mwp962dHbyahEKpXBWCaXD03Nr2ado5Z/0jeM8CwkvdetC5cF8d/wVGeCQxOIDr69JtAuvRJv64hDA6L+2ADf1pjt+EWPrUq7bCEX3wP8QMl6rXtli2Exb1dYP3/Zrlq4OLJ/ouyhEuemZf0IP2L+UcV9pUQUu3R66mIC9a2B9V7PRpWf68qXvJ8g1dblD2nzd7skVqmcKv1AI7/2547ecmilggxIdEatxDSxxAxJ8AaTBAA7pP1MszS4IfwsGBRkTKUjljkZrc+v
',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => '
MIID1zCCAr+gAwIBAgIBADANBgkqhkiG9w0BAQsFADCBhTEPMA0GA1UEAwwGbW9vZGxlMQswCQYDVQQGEwJBVTEUMBIGA1UEBwwLbW9vZGxldmlsbGUxHjAcBgkqhkiG9w0BCQEWD2FkbWluQGVtYWlsLmNvbTENMAsGA1UECgwEdGVzdDEPMA0GA1UECAwGbW9vZGxlMQ8wDQYDVQQLDAZtb29kbGUwHhcNMTkwMTMxMDQwMDI5WhcNMjkwMTI4MDQwMDI5WjCBhTEPMA0GA1UEAwwGbW9vZGxlMQswCQYDVQQGEwJBVTEUMBIGA1UEBwwLbW9vZGxldmlsbGUxHjAcBgkqhkiG9w0BCQEWD2FkbWluQGVtYWlsLmNvbTENMAsGA1UECgwEdGVzdDEPMA0GA1UECAwGbW9vZGxlMQ8wDQYDVQQLDAZtb29kbGUwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCtdgllDmiZM1fzOwTfpHChmdCFu0a//kJ0wQco7bN9TNO0SKWj8KYcAMIfQS4muiOEONmHpc07yPUfvMjeA5nq5EJscqudaiRq6XkfCWaoT2BeL42DIZRh36S0AwWZ6//OYeapcdvagstI7wTPBLCjKQdJ2k5NbyG9dH/Q7mISw1YFBy/e6CspHWl27wf9NTvoiOpccbSNvSX0gvpn7yKu6cB6FP7Lnltf3TK3qj0tUKtlplBdvVC/Km3a2p2S8t5nhSt5dbymCVsgsSNEvQOre30h5RnXx6nBlm/wkQR5L+L6V2FgPqIj/e6e+/cwzSDIZ+gNalPvW/Tx/JmjCvYdAgMBAAGjUDBOMB0GA1UdDgQWBBTTU3AumsDZuz5gZOd/bAbktN5SdTAfBgNVHSMEGDAWgBTTU3AumsDZuz5gZOd/bAbktN5SdTAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBAQB+feS/8Gc+V5XFBNUC1aBHAQMR2iHP6XlWU5sDugQUdS0d6aTwukI7/8q0p1/8EtgDFiVSp89mwp962dHbyahEKpXBWCaXD03Nr2ado5Z/0jeM8CwkvdetC5cF8d/wVGeCQxOIDr69JtAuvRJv64hDA6L+2ADf1pjt+EWPrUq7bCEX3wP8QMl6rXtli2Exb1dYP3/Zrlq4OLJ/ouyhEuemZf0IP2L+UcV9pUQUu3R66mIC9a2B9V7PRpWf68qXvJ8g1dblD2nzd7skVqmcKv1AI7/2547ecmilggxIdEatxDSxxAxJ8AaTBAA7pP1MszS4IfwsGBRkTKUjljkZrc+v
',
    ),
  ),
  'validate.authnrequest' => true,
);