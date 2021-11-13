
echo "start publish to subscribers"
curl -X POST -H "Content-Type: application/json" -d '{ "url": "http://localhost:8080/api/test1"}' http://localhost:8000/subscribe/topic
curl -X POST -H "Content-Type: application/json" -d '{ "url": "http://localhost:8080/api/test2"}' http://localhost:8000/subscribe/topic
curl -X POST -H "Content-Type: application/json" -d '{ "url": "http://localhost:8080/api/test3"}' http://localhost:8000/subscribe/topic
curl -X POST -H "Content-Type: application/json" -d '{"message": "hello"}' http://localhost:8000/publish/topic
