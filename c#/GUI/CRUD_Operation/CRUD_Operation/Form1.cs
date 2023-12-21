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
namespace CRUD_Operation
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
            conn = new SqlConnection(@"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=C:\Users\mrame\OneDrive\Documents\emp.mdf;Integrated Security=True;Connect Timeout=30");
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
                hobby = "Reading,";
            }
            if (checkBox2.Checked == true)
            {
                hobby += "Writing,";
            }
            SqlCommand cmd = new SqlCommand("INSERT INTO [Emp] ([name], [city], [gender], [hobby], [dept]) VALUES (@name, @city, @gender, @hobby, @dept)", conn);
            cmd.Parameters.AddWithValue("@name", textBox1.Text);
            cmd.Parameters.AddWithValue("@city", comboBox1.SelectedItem);
            cmd.Parameters.AddWithValue("@gender", gender);
            cmd.Parameters.AddWithValue("@hobby", hobby);
            cmd.Parameters.AddWithValue("@dept", listBox1.SelectedItem);
            conn.Open();
            cmd.ExecuteNonQuery();
            MessageBox.Show("Data Inserted Successfully");
            conn.Close();

        }

        private void button3_Click(object sender, EventArgs e)
        {
            SqlDataAdapter adpt = new SqlDataAdapter("SELECT * FROM [Emp]", conn);
            DataTable dt = new DataTable();
            adpt.Fill(dt);
            dataGridView1.DataSource = dt;
        }

        
        

        private void dataGridView1_MouseDoubleClick(object sender, MouseEventArgs e)
        {
            checkBox1.Checked = false;
            checkBox2.Checked = false;
            id = Convert.ToInt32(dataGridView1.SelectedRows[0].Cells[0].Value);
            textBox1.Text = dataGridView1.SelectedRows[0].Cells[1].Value.ToString();
            comboBox1.Text = dataGridView1.SelectedRows[0].Cells[2].Value.ToString();

            gender = dataGridView1.SelectedRows[0].Cells[3].Value.ToString();
            if(gender == "male")
            {
                radioButton1.Checked = true;
            }

            if(gender == "female")
            {
                radioButton2.Checked = true;
            }

            hobby = dataGridView1.SelectedRows[0].Cells[4].Value.ToString();
            string[] list = hobby.Split(',');
            foreach (var item in list)
            {
                if (item == "Reading")
                {
                    checkBox1.Checked = true;
                }
                if (item == "Writing")
                {
                    checkBox2.Checked = true;
                }
            }
            listBox1.Text = dataGridView1.SelectedRows[0].Cells[5].Value.ToString();
        }

        private void Print()
        {
            SqlDataAdapter adpt = new SqlDataAdapter("SELECT * FROM [Emp]", conn);
            DataTable dt = new DataTable();
            adpt.Fill(dt);
            dataGridView1.DataSource = dt;
        }

        private void button2_Click(object sender, EventArgs e)
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
                hobby = "Reading,";
            }
            if (checkBox2.Checked == true)
            {
                hobby += "Writing,";
            }

            SqlCommand cmd = new SqlCommand("UPDATE [Emp] SET [name] = @name,[city] = @city, [gender] = @gender,[hobby] = @hobby,[dept] = @dept WHERE [id] = @id ", conn);
            cmd.Parameters.AddWithValue("@name", textBox1.Text);
            cmd.Parameters.AddWithValue("@city", comboBox1.Text);
            cmd.Parameters.AddWithValue("@gender", gender);
            cmd.Parameters.AddWithValue("@hobby", hobby);
            cmd.Parameters.AddWithValue("@dept", listBox1.SelectedItem);
            cmd.Parameters.AddWithValue("@id", id);
            conn.Open();
            cmd.ExecuteNonQuery();
            MessageBox.Show("Data Updated Successfuly");
            conn.Close();
            Print();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            SqlCommand cmd = new SqlCommand("Delete From [Emp] WHERE [id] = @id", conn);
            cmd.Parameters.AddWithValue("@id", id);
            conn.Open();
            cmd.ExecuteNonQuery();
            MessageBox.Show("Data Deleted Successfully");
            conn.Close();
            Print();
        }
    }
    }

