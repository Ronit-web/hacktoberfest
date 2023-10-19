using System;

class Program
{
    static void Main()
    {
        string userInput = GetUserInput("Please enter your name: ");
        Console.WriteLine($"Hello, {userInput}!");
    }

    static string GetUserInput(string prompt)
    {
        Console.Write(prompt);
        return Console.ReadLine();
    }
}
