<?php 

echo "Lets start";
print("hello");

//$students = array('Mr X', 'Mr Y', 'Mr Z');



//for Loop
$students = ['Mr X', 'Mr Y', 'Mr Z'];

for ($i = 0; $i < count($students); $i++) { 
	echo $students[$i];
}


//nested for loop
for ($i=0; $i < 10; $i++) { 
	for ($j=0; $j < 10 ; $j++) { 
		echo "*";
	}
	echo "<br>";
}

//This is one line of commemnt

/*this is multi line 
comment */

