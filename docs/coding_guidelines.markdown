# Codex

## Codex Coding Guidelines

### Editor settings

* You must use tab indentation for within each block
* Tabs should be set to equal 4 (four) spaces
* All files should be saved with UNIX (also known as LF or "\n") linefeeds, and not using the Windows linefeeds (also known as CRLF or "\r\n") or Classic Mac (also known as CR or "\r") linefeeds


### General coding style

* Use braces and not keywords (such as endif; and endwhile;)
* Braces indicating the start or end of code blocks are to be placed on their own line at all times.
* Only have one statement in a line!  Do not stack multiple statements separated by the end-of-statement character on one line!
* Long lines of code should not be wrapped onto the next line.
* Order of operations should be made explicitly clear; use parenthesis as necessary.
* Put a space between operators and values.
* Use symbolic operators instead of keyword operators.
* Ternary statements are allowed for assigning values to a variable or property, or specifying parameters for a method/function.  Ternary statements are NOT mini-if statements for deciding on what methods/functions to execute!
* Add a space between keywords and braces.
* Be efficient with checking variables.
* Only increment tabbing (by one) when you go up a level (a new level of braces) and do not add tabbing on lines which contain no content at all.

**Examples:**

example 1 - *braces vs keywords*

	// this is bad
	if ($something)
		echo 'COOKIES!';
	endif;

	// this is good
	if ($something)
	{
		echo 'COOKIES!';
	}

example 2 - *brace location*

	// this is bad
	if ($something) {
		echo 'hello world';
	}

	// this is good
	if ($something)
	{
		echo 'hello world';
	}

example 3 - *statement stacking*

	// this is bad
	echo 'hi'; $this->doThisAndThat(); exit();

	// this is good
	echo 'hi';
	$this->doSomething();
	exit();

example 4 - *statement wrapping*

	// this is bad
	$this->doSomething('areallylongstringthatisverylongandisveryannoyingihatethisstring',
		array('something' => 'foobar'));

	// this is good
	$this->doSomething('areallylongstringthatisverylongandisveryannoyingihatethisstring', array('something' => 'foobar'));

	// this is much better
	$long_string = 'areallylongstringthatisverylongandisveryannoyingihatethisstring';
	$this->doSomething($long_string, array('something' => 'foobar'));

example 5 - *order of operations, operator precedence*

	// this is bad
	$bool = ($big_var < 7 && $super_var > 8 || $some_var == 4);

	// this is good
	$bool = ($big_var < 7 && ($super_var > 8 || $some_var == 4));

example 6 - *spacing between operators and values*

	// this is bad
	$value=3+$another_value;

	// this is good
	$value = 3 + $another_value;

example 7 - *symbolic operators versus keyword operators*

	// this is bad
	if ($something AND $something_else)

	// this is good
	if ($something && $something_else)

example 8 - *ternary statements*

	// this is bad
	($some_value) ? $this->doSomething($value) : $this->doAnotherThing($value);

	// this is good
	$some_value = (!$value) ? $this->doSomething($value) : $some_other_value;

example 9 - *keywords*

	// this is bad
	if($something)
	{
		echo 'COOOOOOOOOOKIES!';
	}

	// this is good
	if ($something)
	{
		echo 'COOOOOOOOOOKIES!';
	}

example 10 - *checking variables*

	// this is bad
	if ($something == true && $somethingelse != false)
	{
		echo 'COOOOOOOOOOKIES!';
	}

	// this is good
	if ($something && !$somethingelse)
	{
		echo 'COOOOOOOOOOKIES!';
	}

example 11 - *no excessive tabbing*

	// this is bad (let [\t] be a tab)
	if ($something)
	{
	[\t][\t]echo 'b';
	}
	[\t]
	if (!$somethingelse)
	{
	[\t]echo 'c';
	}

	// this is good
	if ($something)
	{
	[\t]echo 'b';
	}

	if (!$somethingelse)
	{
	[\t]echo 'c';
	}