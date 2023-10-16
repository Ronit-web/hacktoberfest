def fibonacci(n, memo={}):
    if n <= 0:
        return 0
    elif n == 1:
        return 1
    elif n in memo:
        return memo[n]
    else:
        memo[n] = fibonacci(n - 1, memo) + fibonacci(n - 2, memo)
        return memo[n]

n = int(input("Enter Length Of Series :"))
if n <= 0:
    print("Please enter a positive integer.")
else:
    print("Fibonacci Series:",end=" ")
    for i in range(n):
        print(fibonacci(i),end=" ")
