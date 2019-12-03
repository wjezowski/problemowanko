<?php
	echo '<div id="buttons_area">';
	
	
	if ($this->router->class === "admin_controller" && $this->router->method === "vehicles_manager")
	{
		echo '
			<a href="/add_vehicle">Add a vehicle</a>';
	}
	else if ($this->router->class === "admin_controller" && $this->router->method === "add_vehicle")
	{
		echo '
			<a href="/vehicles_manager">Back to list</a>';
	}
	else if ($this->router->class === "vehicles_controller" && $this->router->method === "choose_vehicle")
	{
		echo '
			<a href="/find_vehicle">Back to available vehicles</a>
			<a id="book_vehicle">Book this vehicle</a>
			<a id="test_drive">Take vehicle on a test drive (-)</a>';
	}
	
	
	echo '</div>';
?>