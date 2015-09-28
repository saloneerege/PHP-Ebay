# PHP-Ebay
Server Side Scripting using PHP,XML and eBay API
In this project I created a webpage that allows users to search items on eBay.com using their API  and display the result in a Tabular form. Once the user has provided valid data ( a keyword is required) , the script will make a request to the Apache Web server with the form data that was entered. I used POST to transfer the form data to the server. The PHP script retrieves the data and sends  it to the eBay API service. The API call to eBay is done simply by a URL REST. The validations performed are on the Price entries made in the form field for negative values of price. The minimum price entered by the user cannot exceed the maximum price. The number of searches results returned depend on the selection made by the user which is then displayed in a tabular form.





