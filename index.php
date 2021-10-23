<?php

	$response = json_decode(file_get_contents("https://api.adviceslip.com/advice"), true);

	echo "<h2> Today's advice is " . $response['slip']['advice'] . "</h2>";