using System;

class Program
{
    static void Main()
    {
        int number = 10;

        
        if (number > 5)
        {
            Console.WriteLine("Number is greater than 5");
        }

        
        if (number > 15)
        {
            Console.WriteLine("Number is greater than 15");
        }
        else
        {
            Console.WriteLine("Number is not greater than 15");
        }

        
        if (number > 20)
        {
            Console.WriteLine("Number is greater than 20");
        }
        else if (number > 10)
        {
            Console.WriteLine("Number is greater than 10 but not greater than 20");
        }
        else
        {
            Console.WriteLine("Number is 10 or less");
        }
    }
}
