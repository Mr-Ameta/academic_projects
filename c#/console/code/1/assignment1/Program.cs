using System;

class NumberSwapper
{
    // Function to swap two integers
    public void Swap(ref int a, ref int b)
    {
        int temp = a;
        a = b;
        b = temp;
    }

    // Function to swap two floats
    public void Swap(ref float a, ref float b)
    {
        float temp = a;
        a = b;
        b = temp;
    }

    static void Main(string[] args)
    {
        NumberSwapper swapper = new NumberSwapper();

        int num1 = 10, num2 = 20;
        Console.WriteLine("Name: Mahesh Ameta");
        Console.WriteLine("Enrollment No: 210802007");

        Console.WriteLine("Before swapping integers: num1 = {0}, num2 = {1}", num1, num2);
        swapper.Swap(ref num1, ref num2);
        Console.WriteLine("After swapping integers: num1 = {0}, num2 = {1}", num1, num2);

        float float1 = 5.5f, float2 = 3.3f;
        Console.WriteLine("Before swapping floats: float1 = {0}, float2 = {1}", float1, float2);
        swapper.Swap(ref float1, ref float2);
        Console.WriteLine("After swapping floats: float1 = {0}, float2 = {1}", float1, float2);
    }
}
