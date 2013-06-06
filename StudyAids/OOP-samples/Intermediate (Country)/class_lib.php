<?php
	include_once("connection.php");

	class Country extends Database{

		//return all the countries
		public function getCountries()
		{
			$query = "SELECT * FROM country";
			return $this->fetch_all($query);
		}

	}

?>