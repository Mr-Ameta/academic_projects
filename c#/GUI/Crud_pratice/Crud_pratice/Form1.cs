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

namespace Crud_pratice
{
    public partial class Form1 : Form
    {
        int id;
        string hobby = "";
        string gender = "";
        SqlConnection con;
        public Form1()
        {
            
            InitializeComponent();
            con = new SqlConnection(@"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=C:\Users\mrame\OneDrive\Documents\Employee.mdf;Integrated Security=True;Connect Timeout=30");
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
                hobby = "reading,";
            }
            if (checkBox2.Checked == true)
            {
                hobby += "coding,";
            }

            SqlCommand cmd = new SqlCommand("INSERT INTO [EMP] ([name], [city], [gender], [hobby], [dept]) VALUES (@name, @city, @gender, @hobby, @dept)",con);
            cmd.Parameters.AddWithValue("@name", textBox1.Text);
            cmd.Parameters.AddWithValue("@city", comboBox1.Text);
            cmd.Parameters.AddWithValue("@gender", gender);
            cmd.Parameters.AddWithValue("@hobby", hobby);
            cmd.Parameters.AddWithValue("@dept", listBox1.SelectedItem);
            con.Open();
            cmd.ExecuteNonQuery();
            MessageBox.Show("Data Inserted Successfully");
            con.Close();

        }

        private void button2_Click(object sender, EventArgs e)
        {
            SqlDataAdapter data = new SqlDataAdapter("SELECT * FROM [EMP]", con);
            DataTable dt = new DataTable();
            data.Fill(dt);
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

            if (gender == "male")
            {
                radioButton1.Checked = true;
            }

            if (gender == "female")
            {
                radioButton2.Checked = true;
            }

            hobby = dataGridView1.SelectedRows[0].Cells[4].Value.ToString();
            string[] list = hobby.Split(',');
            foreach (var item in list)
            {
                if (item == "reading")
                {
                    checkBox1.Checked = true;
                }
                if (item == "coding")
                {
                    checkBox2.Checked = true;
                }
            }
            listBox1.Text = dataGridView1.SelectedRows[0].Cells[5].Value.ToString();
        }

        private void Print()
        {
            SqlDataAdapter data = new SqlDataAdapter("SELECT * FROM [EMP]", con);
            DataTable dt = new DataTable();
            data.Fill(dt);
            dataGridView1.DataSource = dt;
        }

        private void button4_Click(object sender, EventArgs e)
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
                hobby = "reading,";
            }
            if (checkBox2.Checked == true)
            {
                hobby += "coding,";
            }

            SqlCommand cmd = new SqlCommand("UPDATE [EMP] SET [name]=@name, [city]=@city, [gender]=@gender, [hobby]=@hobby, [dept]=@dept WHERE [id]=@id", con);
            cmd.Parameters.AddWithValue("@name", textBox1.Text);
            cmd.Parameters.AddWithValue("@city", comboBox1.Text);
            cmd.Parameters.AddWithValue("@gender", gender);
            cmd.Parameters.AddWithValue("@hobby", hobby);
            cmd.Parameters.AddWithValue("@dept", listBox1.SelectedItem);
            cmd.Parameters.AddWithValue("@id", id);

            con.Open();
            cmd.ExecuteNonQuery();
            MessageBox.Show("Data Updated Successfully");
            con.Close();
            Print();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            SqlCommand cmd = new SqlCommand("DELETE FROM [EMP] WHERE [id] = @id", con);
            cmd.Parameters.AddWithValue("@id", id);
            con.Open();
            cmd.ExecuteNonQuery();
            MessageBox.Show("Data DELETED Successfully");
            con.Close();
            Print();
        }
    }
}
