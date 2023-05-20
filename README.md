# fibo

## Important:
1. It took me some time to install the bcmath. I had some problems with chached parts of the docker image.


## How to run the container??

1. You need docker and docker-compose installed.
2. call 'make init'
3. go to http://localhost/fibonacci/10 (http://localhost/fibonacci/{count})
4. call 'make test' after 'make init' to run unit tests

## Here is the technical test🤓:
Part of our cryptographic mechanism (used to protect users' personal information) is based on numbers in the Fibonacci sequence.
When putting our systems into production we noticed a serious
performance degradation when Fibonacci numbers 100 and higher were required.

Investigating, we arrive at the function that calculates it. It is transcribed below:
```
function fibonacci($count){
	if($count == 0 || $count == 1){
		return 1;
	} else {
		return fibonacci($count - 1) + fibonacci($count - 2);
	}
}
```
## 1- Explanation of why this happens (Most technical possible).
		
		When the 'function fibonacci' is invoked, a certain amount of memory is allocated until the 'function fibonacci' finishes.
		However, the 'function fibonacci' is invoking two instances of itself.
		This behavior produces an exponential memory allocation -- complexity of O(2^n).
		The job responsable by the 'function fibonacci' is probably running out of memory.  


Solution with complexity of O(n):	
```
function fibonacci($count) {
        $a = '0.0';
        $b = '1.0';
    
        $i = 1;
        while ($i < $count->value) {
            $i++;
            $next = bcadd($a, $b, 0);
            $a = $b;
            $b = $next;
        }
        
        return new NumericString($b);
}
```
	
## 2- Create an API with the solution (It should run in a container).
What is expected?
	1- Repository with the API.