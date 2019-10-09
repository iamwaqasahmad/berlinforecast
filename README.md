# berlinforecast

#installation

clone the repository,    
run composer update,  
change database & API key details from .env file,  
php bin/console doctrine:database:create   
 php bin/console doctrine:migrations:migrate

now run the serve command if you have installed symfony globally then you can run this command 

symfony serve
