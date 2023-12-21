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

namespace c_o
{
    
    public partial class Form1 : Form
    {
        SqlConnection con;
        int id;
        
        public Form1()
        {
            InitializeComponent();
            con = new SqlConnection(@"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=C:\Users\mrame\OneDrive\Documents\abc.mdf;Integrated Security=True;Connect Timeout=30");
        }

        private void button1_Click(object sender, EventArgs e)
        {
            SqlCommand cmd = new SqlCommand("INSERT INTO [auth] ([name] , [pass]) VALUES (@name,@pass)",con);
            cmd.Parameters.AddWithValue("@name", textBox1.Text);
            cmd.Parameters.AddWithValue("@pass", textBox2.Text);
            con.Open();
            cmd.ExecuteNonQuery();
            MessageBox.Show("done");

            con.Close();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            SqlDataAdapter adpt = new SqlDataAdapter("SELECT * FROM [auth]",con);
            DataTable dt = new DataTable();
            adpt.Fill(dt);
            dataGridView1.DataSource = dt;
        }
    }
}
