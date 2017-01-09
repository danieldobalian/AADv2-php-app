# Azure AD App built in PHP using the v2 Endpoint

This is a small php app that uses the Azure AD v2 endpoint to get authorization for the Microsoft Graph.  

## Authors

Daniel Dobalian ([dadobali@microsoft.com](mailto:dadobali@microsoft.com))

## Steps to Run

Register an Azure AD v2 app to obtain a client id (or consumer key) on our [Microsoft Identity Portal](https://identity.microsoft.com). Once you register a new app, Click "Generate New Password'.  This will be your consumer secret. Then click "Add Platform" and add a Redirect URI's for the desired redirect route in the app.  If you use the same redirect URI as in the sample code, you will make 2 changes in code. 

Included in the sample is a comoser file with the required dependencies, you can run:
```
composer install
composer update
```

Then run the following command and navigate to localhost:8000/login.php:
```
php -S localhost:8000
```


## References

This app uses the phpleague's Library and TheNetworg's plugin for all Identity code.  Please report any library or plugin issues to these authors. 

Thanks to [Caitlin](https://github.com/cbales) for reviewing and improving this sample. 

###Frameworks

[phpleague OAuth2.0 Client](https://github.com/thephpleague/oauth2-client)

[TheNetworg's AAD Plugin](https://github.com/thenetworg/oauth2-azure)

