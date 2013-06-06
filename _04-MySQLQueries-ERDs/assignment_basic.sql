1. SELECT COUNT(*) AS totalCities, country.Name from city
LEFT JOIN country on city.countryCode = country.Code
GROUP BY city.countrycode
ORDER BY totalCities DESC;

2. SELECT country.name, countrylanguage.language, countrylanguage.Percentage FROM countrylanguage 
LEFT JOIN country on countrylanguage.countryCode = country.code
WHERE language = "Slovene"
ORDER BY countrylanguage.Percentage DESC;

3.SELECT * FROM city WHERE countryCode = "MEX" AND Population > 500000
ORDER BY Population DESC;

4. SELECT language FROM countryLanguage WHERE Percentage > 89
ORDER BY Percentage DESC;

5. SELECT name, surfacearea, population FROM country WHERE SurfaceArea < 501 AND Population > 100000;

6. SELECT name, GovernmentForm, Capital, LifeExpectancy FROM country 
WHERE GovernmentForm = "Constitutional Monarchy" AND Capital > 200 AND LifeExpectancy > 75;

7.SELECT country.Name, city.Name, city.District, city.Population FROM city 
LEFT JOIN country on city.CountryCode = country.Code
WHERE city.District = "Buenos Aires" AND city.Population > 500000 AND country.name = "Argentina";

8. SELECT COUNT(*) as total_countries, Region from country
GROUP BY Region
ORDER BY total_countries DESC;