using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.SqlClient;
namespace crud_demo
{
    public partial class Form1 : Form
    {
        SqlConnection conn;
        int id;
        string gender = "";
        string hobby = "";

        public Form1()
        {
            InitializeComponent();
            conn = new SqlConnection(@"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=C:\Users\mrame\OneDrive\Documents\DepartmentDb.mdf;Integrated Security=True;Connect Timeout=30");
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (radioButton1.Checked == true)
            {
                gender = "male";
            }
            if (radioButton2.Checked == true)
            {
                gender = "female";
            }
            if (checkBox1.Checked == true)
            {
                hobby = "programming";
            }
            if (checkBox2.Checked == true)
            {
                hobby += "gaming";
            }
            SqlCommand cmd = new SqlCommand("INSERT INTO  [emp] ([name],[city],[gender],[hobby],[dept]) VALUES(@name,@city,@gender,@hobby,@dept)",conn);
            cmd.Parameters.AddWithValue("@name", textBox1.Text);
            cmd.Parameters.AddWithValue("@city", comboBox1.SelectedItem);
            cmd.Parameters.AddWithValue("@gender", gender);
            cmd.Parameters.AddWithValue("@hobby", hobby);
            cmd.Parameters.AddWithValue("@dept", listBox1.SelectedItem);
            conn.Open();
            cmd.ExecuteNonQuery();
            MessageBox.Show("Data Inserted");
            conn.Close();
}

        private void Form1_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'departmentDbDataSet.emp' table. You can move, or remove it, as needed.
            this.empTableAdapter.Fill(this.departmentDbDataSet.emp);

        }
    }
}
