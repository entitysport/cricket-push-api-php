# cricket-push-api-php
Core PHP Code Example

To create a PHP script that receives JSON data from our push request, you can use the php://input stream to read the raw POST data and then decode it as JSON. Here's an example:

n this PHP script, we read the raw POST data using file_get_contents('php://input'), which allows us to access the data sent in the request body directly as a string. We then use json_decode to attempt to parse the raw data as JSON. If the JSON decoding is successful, we process the data and prepare a response. If the decoding fails, we handle the error and send an error response.

This script sends a JSON response back to the client, confirming the data was received successfully or indicating an error in case of invalid JSON data.

When the server receives the JSON data, it will log it and respond with a JSON message confirming that the data was received successfully.
