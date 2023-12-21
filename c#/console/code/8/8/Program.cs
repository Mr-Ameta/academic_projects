using System;
using System.Collections.Generic;

class Employee
{
    private static int count = 1;

    public int Emp_Id { get; private set; }
    public string Emp_Name { get; set; }
    public decimal Basic_Salary { get; set; }
    public decimal Gross_Salary { get; private set; }

    public Employee(string name, decimal basicSalary)
    {
        Emp_Id = count++;
        Emp_Name = name;
        Basic_Salary = basicSalary;
        Calculate_Gross_Salary();
    }

    public void Calculate_Gross_Salary()
    {
        // Calculate Gross Salary (for example, adding 20% to Basic Salary)
        Gross_Salary = Basic_Salary * 1.20m;
    }

    public void Display_Data()
    {
        Console.WriteLine($"Emp Id: {Emp_Id}");
        Console.WriteLine($"Emp Name: {Emp_Name}");
        Console.WriteLine($"Basic Salary: {Basic_Salary}");
        Console.WriteLine($"Gross Salary: {Gross_Salary}");
    }
}

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Name: Mahesh Ameta");
        Console.WriteLine("Enrollment no: 210802007");
        Console.WriteLine("Roll No: 16\n");

        List<Employee> employees = new List<Employee>();

        while (true)
        {
            Console.WriteLine("Menu:");
            Console.WriteLine("a. Add Data");
            Console.WriteLine("b. Display Data");
            Console.WriteLine("c. Search By Id");
            Console.WriteLine("d. Search By Name");
            Console.WriteLine("e. Update By Id");
            Console.WriteLine("f. Delete By Id");
            Console.WriteLine("x. Exit");
            Console.Write("Enter your choice: ");

            string choice = Console.ReadLine();

            switch (choice.ToLower())
            {
                case "a":
                    Console.Write("Enter Employee Name: ");
                    string name = Console.ReadLine();
                    Console.Write("Enter Basic Salary: ");
                    decimal basicSalary = decimal.Parse(Console.ReadLine());
                    employees.Add(new Employee(name, basicSalary));
                    Console.WriteLine("Employee added successfully.");
                    break;

                case "b":
                    foreach (var emp in employees)
                    {
                        emp.Display_Data();
                        Console.WriteLine();
                    }
                    break;

                case "c":
                    Console.Write("Enter Employee Id to search: ");
                    int searchId = int.Parse(Console.ReadLine());
                    Employee empById = employees.Find(e => e.Emp_Id == searchId);
                    if (empById != null)
                    {
                        empById.Display_Data();
                    }
                    else
                    {
                        Console.WriteLine("Employee not found.");
                    }
                    break;

                case "d":
                    Console.Write("Enter Employee Name to search: ");
                    string searchName = Console.ReadLine();
                    Employee empByName = employees.Find(e => e.Emp_Name.Equals(searchName, StringComparison.OrdinalIgnoreCase));
                    if (empByName != null)
                    {
                        empByName.Display_Data();
                    }
                    else
                    {
                        Console.WriteLine("Employee not found.");
                    }
                    break;

                case "e":
                    Console.Write("Enter Employee Id to update: ");
                    int updateId = int.Parse(Console.ReadLine());
                    Employee empToUpdate = employees.Find(e => e.Emp_Id == updateId);
                    if (empToUpdate != null)
                    {
                        Console.Write("Enter new Basic Salary: ");
                        decimal newSalary = decimal.Parse(Console.ReadLine());
                        empToUpdate.Basic_Salary = newSalary;
                        empToUpdate.Calculate_Gross_Salary();
                        Console.WriteLine("Employee updated successfully.");
                    }
                    else
                    {
                        Console.WriteLine("Employee not found.");
                    }
                    break;

                case "f":
                    Console.Write("Enter Employee Id to delete: ");
                    int deleteId = int.Parse(Console.ReadLine());
                    Employee empToDelete = employees.Find(e => e.Emp_Id == deleteId);
                    if (empToDelete != null)
                    {
                        employees.Remove(empToDelete);
                        Console.WriteLine("Employee deleted successfully.");
                    }
                    else
                    {
                        Console.WriteLine("Employee not found.");
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
