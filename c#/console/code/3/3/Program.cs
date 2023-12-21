using System;

class Room
{
    // Attributes
    public int RoomNo { get; set; }
    public string RoomType { get; set; }
    public double RoomArea { get; set; }
    public bool ACmachine { get; set; }

    // Member function to set data
    public void SetData(int roomNo, string roomType, double roomArea, bool acMachine)
    {
        RoomNo = roomNo;
        RoomType = roomType;
        RoomArea = roomArea;
        ACmachine = acMachine;
    }

    // Member function to display data
    public void DisplayData()
    {
        Console.WriteLine("Room Number: " + RoomNo);
        Console.WriteLine("Room Type: " + RoomType);
        Console.WriteLine("Room Area: " + RoomArea + " sq. ft.");
        Console.WriteLine("AC Machine: " + (ACmachine ? "Installed" : "Not Installed"));
    }
}

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Name: Mahesh Ameta");
        Console.WriteLine("Enrollment no: 210802007");
        Console.WriteLine("Roll No: 16");

        Room room1 = new Room();
        Console.Write("Enter Room No: ");
        var rno = Convert.ToInt32(Console.ReadLine());

        Console.Write("Enter Room Type: ");
        var rt = Console.ReadLine();

        Console.Write("Enter Room Area: ");
        var rarea = Convert.ToDouble(Console.ReadLine());

        Console.Write("Is Ac Installed(true Or false): ");
        var ac = Convert.ToBoolean(Console.ReadLine());

        room1.SetData(rno, rt, rarea, ac);

        Console.WriteLine("\nRoom 1 Details:");
        room1.DisplayData();
    }
}
