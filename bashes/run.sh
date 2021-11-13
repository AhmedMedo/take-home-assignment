if [ $1 == 'publisher' ]
then
    echo "Start Publisher port 8000"
    php artisan serve --port 8000

elif [ $1 == 'subscriber' ]
then
    echo "start Subscriber on port 8080"
    php artisan serve --port 8080
fi


