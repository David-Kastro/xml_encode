A PHP function to encode an array into a xml file.

1. If one parameter is especified (array), this function will return a xml object.
2. If 2 parameters are especified (array, filename), this function will return a xml object and create a xml file with the name especified in the second parameter.
3. If 3 parameters are especified (array, filename, xml object), this function will add a node to a xmlobject passed as the third parameter, return a xml object and create a xml file with the name especified in the second parameter.