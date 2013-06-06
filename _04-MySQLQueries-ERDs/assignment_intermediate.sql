INTERMEDIATE ASSIGNMENT.

1. SELECT customer.first_name, customer.last_name,customer.email, address.address FROM customer 
LEFT JOIN address ON customer.address_id = address.address_id 
WHERE city_id = 312;

2. SELECT film.title,film.description,film.release_year,film.rating,film.special_features, category.name FROM film
LEFT JOIN film_category ON film.film_id = film_category.film_id
LEFT JOIN category ON film_category.category_id = category.category_id
WHERE film_category.category_id = 5;

3. SELECT film.title,film.description,film.release_year FROM film
LEFT JOIN film_actor ON film.film_id = film_actor.film_id
WHERE film_actor.actor_id = 5;

4. SELECT customer.first_name,customer.last_name,customer.email,address.address FROM customer
LEFT JOIN address ON customer.address_id = address.address_id
WHERE customer.store_id = 1 AND (address.city_id = 1 OR address.city_id = 42 OR address.city_id = 312 OR address.city_id = 459);

5. SELECT film.title,film.description,film.release_year,film.rental_rate,film.special_features FROM film
LEFT JOIN film_actor ON film.film_id = film_actor.film_id
WHERE film.special_features LIKE "behind%" AND film.rating = "G" AND film_actor.actor_id = 15;

6. SELECT actor.first_name,actor.last_name,actor.last_update,film_actor.film_id FROM actor
LEFT JOIN film_actor ON actor.actor_id = film_actor.actor_id
WHERE film_actor.film_id = 369;

7. SELECT film.title,film.description,film.release_year,film.rating,film.special_features,category.name FROM film
LEFT JOIN film_category ON film.film_id = film_category.film_id
LEFT JOIN category ON film_category.category_id = category.category_id
WHERE film.rental_rate = 2.99;

8. SELECT film.title,film.description,film.release_year,film.rating,film.special_features,category.name,actor.first_name,actor.last_name FROM film
LEFT JOIN film_actor ON film.film_id = film_actor.film_id  
LEFT JOIN actor ON film_actor.actor_id = actor.actor_id
LEFT JOIN film_category ON film.film_id = film_category.film_id
LEFT JOIN category ON film_category.category_id = category.category_id
WHERE category.name = "action" AND actor.first_name = "Sandra" AND actor.last_name = "Kilmer";