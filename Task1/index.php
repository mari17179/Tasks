<?php
	echo "Задача скобки<br />";

	$testStrings = array("5 * (4 - 2)", "5 * (4 - 2(", "6 + ) * (9 - 4)(");

	for ($stringNumber = 0; $stringNumber < count($testStrings); $stringNumber++) {
		$countOpeningBrackets = 0;
		$countClosingBrackets = 0;
		$isFirstBracketOpening = True;
		$stringToCheck = $testStrings[$stringNumber];
		for ($i = 0; $i < strlen($stringToCheck); $i++) {
			if ($stringToCheck[$i] == ')' ) {
				if ($countOpeningBrackets == 0 && $countClosingBrackets == 0) {
					$isFirstBracketOpening = False;
					break;
				}
				$countClosingBrackets++;
			}
			else if ($stringToCheck[$i] == '(' ) {
				$countOpeningBrackets++;
			}
		}

		echo $stringToCheck . "<br />";
		if (!$isFirstBracketOpening) {
			echo "Ошибка. Первая скобка в строке является закрывающейся.<br />";
		}
		else if ($countOpeningBrackets != $countClosingBrackets) {
			echo "Ошибка. Количество открывающихся и закрывающихся скобок не совпадает.<br />";
		}
		else {
			echo "Всё ок.<br />";
		}
	}

?>
