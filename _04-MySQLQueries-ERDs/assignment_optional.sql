--assignment_optional
1)
SELECT SUM(amount) FROM billing
WHERE month(charged_datetime) = 3 AND year(charged_datetime) = 2012;

2)
SELECT SUM(amount) FROM billing
WHERE client_id =2;

3)
SELECT COUNT(site_id) FROM sites
WHERE client_id = 10;

4) for client_id = 1
SELECT client_id , COUNT(site_id), MONTHNAME(sites.created_datetime) FROM sites
WHERE client_id = 1
GROUP BY MONTH(created_datetime);

4) for client_id = 20
SELECT client_id , COUNT(site_id), MONTHNAME(sites.created_datetime) FROM sites
WHERE client_id = 20
GROUP BY MONTH(created_datetime);

5)
SELECT COUNT(leads_id) FROM leads
WHERE leads.registered_datetime >= '2011-01-01' 
AND leads.registered_datetime <= '2011-02-15';

6)
SELECT clients.first_name,clients.last_name, COUNT(leads.leads_id)
FROM clients
LEFT JOIN sites ON clients.client_id = sites.client_id
LEFT JOIN leads ON sites.site_id = leads.site_id
WHERE YEAR(leads.registered_datetime) = '2011'
GROUP BY clients.client_id;

My SQL- Optional Assignment

7)
SELECT clients.first_name, clients.last_name, leads.registered_datetime AS month_generated, COUNT(leads.leads_id)
FROM clients
LEFT JOIN sites ON clients.client_id = sites.client_id
LEFT JOIN leads ON sites.site_id = leads.site_id
WHERE MONTH(leads.registered_datetime) >=1 
AND MONTH(leads.registered_datetime) <=6 
AND YEAR(leads.registered_datetime) = 2011
GROUP BY clients.client_id;

8)
	a)
SELECT CONCAT(clients.first_name, " ", clients.last_name) AS client_name, sites.domain_name, 
COUNT(leads.leads_id) AS number_of_leads
FROM clients
LEFT JOIN sites ON clients.client_id = sites.client_id
LEFT JOIN leads ON sites.site_id = leads.site_id
WHERE YEAR(leads.registered_datetime) = 2011
GROUP BY sites.site_id
ORDER BY client_name;

	b) #Difference From part a = REMOVE condtional WHERE YEAR......#
SELECT CONCAT(clients.first_name, " ", clients.last_name) AS client_name, sites.domain_name, 
COUNT(leads.leads_id) AS number_of_leads
FROM clients
LEFT JOIN sites ON clients.client_id = sites.client_id
LEFT JOIN leads ON sites.site_id = leads.site_id
GROUP BY sites.site_id
ORDER BY client_name;

9)
SELECT CONCAT(clients.first_name, " ", clients.last_name) AS client_name,
SUM(billing.amount) AS total_revenue, MONTHNAME(billing.charged_datetime), YEAR(billing.charged_datetime)
FROM clients
LEFT JOIN billing ON clients.client_id = billing.client_id
GROUP BY billing.billing_id
ORDER BY client_name;

10)
SELECT CONCAT(clients.first_name, " ", clients.last_name) as client_name, 
GROUP_CONCAT(sites.domain_name ORDER BY sites.domain_name ASC SEPARATOR " / ") AS sites
FROM clients
LEFT JOIN sites ON clients.client_id = sites.client_id
GROUP BY client_name;