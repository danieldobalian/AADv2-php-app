# Azure AD App built in PHP using the v2 Endpoint

This is a small php app that uses the Azure AD v2 endpoint to get authorization for the Microsoft Graph.  

## Authors

Daniel Dobalian ([dadobali@microsoft.com](mailto:dadobali@microsoft.com))

## Steps to Run

Register an Azure AD v2 app to obtain a client id (or consumer key). Click "Generate New Password', this will be your consumer secret. Then add Redirect URI's for the desired redirect route in the app.  If you use the same redirect URI as in code, you should only need to make 2 changes to the sample code.  

Use your favorite php web hosting server and simply navigate to mylocalwebserver/login.php.  I used a simple Apache web server (Great sample [here](https://jason.pureconcepts.net/2015/10/install-apache-php-mysql-mac-os-x-el-capitan/)). 

## References

This app uses the phpleague's Library and TheNetworg's plugin for all Identity code.  Please report any library or plugin issues to these authors. 

###Frameworks

[phpleague OAuth2.0 Client](https://github.com/thephpleague/oauth2-client)

[TheNetworg's AAD Plugin](https://github.com/thenetworg/oauth2-azure)

