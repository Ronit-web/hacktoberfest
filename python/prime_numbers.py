import math

print("Welcome to PRIME CHECKER")

number = input("Enter a prime number:")

def prime_checker(n):
  #basic-number-checking
  print(n)
  if n <= 1:
    return False
  if n == 2 or n == 3:
    return True
  if n % 2 == 0 or n % 3 ==0:
    return False

  #iterating through numbers to check if prime
  i = 5
  while i <= math.sqrt(n):
    if n % i == 0 or n % (i+2) == 0:
      return False
      i += 6    
      
  #if no factors, then return True
  return True
    
#ensure input is int
try:
  number = int(number)
except ValueError:
  print("Error, wrong type inputted")
else:
  number = int(number)
  #run is_prime function
  is_prime = prime_checker(number)
  print(is_prime)
