function printDivisors($n)
{

// Note that this loop
// runs till square root
for ($i = 1; $i <= sqrt($n); $i++)
{
if ($n%$i == 0)
{

// If divisors are equal,
// print only one
if ($n / $i == $i)
echo $i," ";

// Otherwise print both
else
echo $i," ", $n/$i," ";
}
}
}

// Driver Code
echo "The divisors of 100 are: \n";
printDivisors(100);