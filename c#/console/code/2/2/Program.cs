using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Name: Mahesh Ameta");
        Console.WriteLine("Enrollment no: 210802007");
        Console.WriteLine("Roll No: 16\n");

        int num1 = 10, num2 = 20;
        Console.WriteLine("Before swapping: num1 = {0}, num2 = {1}", num1, num2);

        Swap(ref num1, ref num2);

        Console.WriteLine("After swapping: num1 = {0}, num2 = {1}", num1, num2);

        Console.ReadLine();
    }

    static void Swap(ref int a, ref int b)
    {
        int temp = a;
        a = b;
        b = temp;
    }
}
