# ood_auth_discovery

Open ID Connect Discovery page for Open OnDemand

This is the landing page for unauthenticated users trying to access Open
OnDemand. They are given options to select a configured OIDC provider. The OIDC
provider that this currently uses is CILogon.

1. Show the user link to login via CI Logon (and eventually, also Open ID Connect)
2. Explain to user the three step process they should expect to use CI Logon to login to OnDemand

## Install

See directions here: https://github.com/OSC/Open-OnDemand#authentication-deploy-the-discovery-page

## Configuration and Branding

Edit the `config.php` file to change the branding of the discovery page. A global
instance of `Config` is used in the php that renders the discovery page.
