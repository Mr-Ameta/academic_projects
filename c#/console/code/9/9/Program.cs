using System;
using System.Collections.Generic;

class Product
{
    private static int count = 1;
    private int Cust_Id;
    private string Cust_Name;
    private string Product_Name;
    private decimal Price;

    public Product(string custName, string productName, decimal price)
    {
        Cust_Id = count++;
        Cust_Name = custName;
        Product_Name = productName;
        Price = price;
    }

    public string this[int index]
    {
        get
        {
            return $"{Cust_Id}, {Cust_Name}, {Product_Name}, {Price}";
        }
    }

    public void Show_Products()
    {
        Console.WriteLine($"Customer Id: {Cust_Id}");
        Console.WriteLine($"Customer Name: {Cust_Name}");
        Console.WriteLine($"Product Name: {Product_Name}");
        Console.WriteLine($"Price: {Price}");
    }
}

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Name: Mahesh Ameta");
        Console.WriteLine("Enrollment no: 210802007");
        Console.WriteLine("Roll No: 16\n");

        List<Product> products = new List<Product>();

        while (true)
        {
            Console.WriteLine("Menu:");
            Console.WriteLine("a. Add Data");
            Console.WriteLine("b. Display Data");
            Console.WriteLine("x. Exit");
            Console.Write("Enter your choice: ");

            string choice = Console.ReadLine();

            switch (choice.ToLower())
            {
                case "a":
                    Console.Write("Enter Customer Name: ");
                    string custName = Console.ReadLine();
                    Console.Write("Enter Product Name: ");
                    string productName = Console.ReadLine();
                    Console.Write("Enter Price: ");
                    decimal price = decimal.Parse(Console.ReadLine());
                    products.Add(new Product(custName, productName, price));
                    Console.WriteLine("Product added successfully.");
                    break;

                case "b":
                    foreach (var product in products)
                    {
                        product.Show_Products();
                        Console.WriteLine();
                    }
                    break;

                case "x":
                    Console.WriteLine("Exiting...");
                    return;

                default:
                    Console.WriteLine("Invalid choice. Please select a valid option.");
                    break;
            }

            Console.WriteLine();
        }
    }
}
