# SimpleSAMLphp Docker - designed for Moodle use

This is a repo designed to help you build your own SimpleSAMLphp instance using Docker in an Ubuntu container with Nginx and static IP addresses for use alongside an SP on the same machine.

Clone this repo and before running it, follow these instructions:

- go to [https://simplesamlphp.org/docs/stable/simplesamlphp-idp] and follow steps in tandem with these instructions (correct as of 01 February 2019)
- steps 1 - 4 of the SimpleSAMLphp idP instructions are conducted for you by the Dockerfile

- following step 5, open the *saml20-idp-hosted.php* file in the repo and alter `https://192.172.0.2:7443` to reflect your IP address or domain name (eg. `https://localhost:7443`)
- you can keep the port the same if or remove it, but any changes **must** be reflected in the *nginx-site.conf* file (see Note 1)
- step 6 is done for you
- following step 7, go to your SP (in my case, my SP is handled by the Moodle plugin version of [https://github.com/catalyst/moodle-auth_saml2/] through the Moodle GUI links *Site Administration -> Authentication -> SAML2 -> Settings -> View Service Provider Metadata*) and copy the XML metadata.
- open your idP in your browser using the IP address you chose earlier (ie `https://192.172.0.2:7443`) and click on the 'Federation' tab
- under the heading 'Tools', select the 'XML to SimpleSAMLphp metadata converter' (you may have to log in with the username and password defined in the repo *config.php* file, in this case both are 'admin')
- paste the copied XML into the parser and click 'Parse'
- copy the metadata code under the heading 'saml20-sp-remote'
- open the repo file *saml20-sp-remote.php* and paste this code in (don't forget an opening tag for the php script ie `<?php` but don't close it as this may cause whitespace issues)

**Note 1:** This has been designed to run on a static IP address created using docker networks, I ran up a user-defined network in docker using:

`docker network create --driver=bridge --subnet=192.172.0.0/16 --gateway=192.172.0.1 moodlenet`

...to create a network named *moodlenet* as I was running an instance of Moodle in the same docker network.

It is necessary for your SimpleSAMLphp container to be on the same network as your SP or they won't be able to talk, and a static IP is necessary as the config files for your idP and it's SPs (*saml20-idp-hosted.php* and *saml20-sp-remote.php*)

Depending on what IP addresses you set up, you may need to alter your *nginx-conf.php* config file to reflect the changes to IP address and ports.

This is all the configuration required to run SimpleSAMLphp as an idP, if you want to use it as an SP, you will need to follow the instructions at [https://simplesamlphp.org]

Then run the following from the directory housing the repo to build your image:

`docker build --tag=simplesamlphp .`

Now in order to run, you'll need to specify the docker network if defined (see Note1) and a static IP address if necessary, while exposing the port required to connect to the container (in this case 7443:7443)

`docker run -d -p 7443 --network=moodlenet --ip=192.172.0.2 simplesamlphp`

This will run the image in the background and assign local port 7443 to container port 7443

(Note: You could use the default port 443 for a secure connection if you aren't running other services, however this clashed with my local Moodle instance which is also run over HTTP, so I chose another port)

Once running you can visit [https://192.172.0.2:7443] and you should see the *SimpleSAMLphp installation page*