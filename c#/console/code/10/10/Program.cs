using System;

interface ITest
{
    int Square(int num);
}

class Arithmetic : ITest
{
    public int Square(int num)
    {
        return num * num;
    }
}

class ToTestInt
{
    public static void Main(string[] args)
    {
        Console.WriteLine("Name: Mahesh Ameta");
        Console.WriteLine("Enrollment no: 210802007");
        Console.WriteLine("Roll No: 16\n");

        Arithmetic arithmetic = new Arithmetic();
        int number = 5;
        int result = arithmetic.Square(number);

        Console.WriteLine($"Square of {number} is: {result}");
    }
}
