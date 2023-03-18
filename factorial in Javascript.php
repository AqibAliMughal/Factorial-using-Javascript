<!DOCTYPE html>
<html>
<head>
<title> FACTORIAL using JavaScript</title>
<script type="text/JavaScript" lang="JavaScript">
/*
===============
FACTORIAL IN JS
===============
*/
var factorial = 5;
document.write( " ' Factorial of  factorial ' ");
document.write( "<br/><br/>");
var temp = 1;
for(var f =  factorial ;  f>=1 ;  f--){
	document.write( f );
	document.write(f == 1	? " = " : " x ");
	temp =  f *  temp ; // 4*1=4, 3*4=12, 2*12=24, 1*24=24
}
document.write(temp);
</script>
</head>
<body>
</body>
</html>